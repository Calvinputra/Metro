<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionStatus;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Http\Resources\TransactionResource;
use App\Models\AccountLedger;
use PDO;
use Validator;
use Illuminate\Support\Str;
use App\Jobs\RecalculateAccountLedgerJob;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        $transactions = Transaction::where('customer_id', $user->id ?? '0')->orderBy('updated_at', 'DESC');
        if (strcasecmp(($request->page_filter ?? ''), 'menunggu_pembayaran') == 0) {
            $transactions->where('status_id', 1);
        } else if (strcasecmp(($request->page_filter ?? ''), 'selesai') == 0) {
            $transactions->where('status_id', 4);
        } else if (strcasecmp(($request->page_filter ?? ''), 'tidak_berhasil') == 0) {
            $transactions->where('status_id', 5);
        } else if (strcasecmp(($request->page_filter ?? ''), 'berlangsung') == 0) {
            $transactions->where(function ($q) {
                $q->where('status_id', 2)->orWhere('status_id', 3);
            });
        }
        return TransactionResource::collection($transactions->paginate($request->paginate ?? 25));
    }
    public function show($uuid)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        $data = Transaction::where('customer_id', $user->id ?? '0')->where('uuid', $uuid)->first();
        if ($data) {
            if ($data->snap_token) {
                return (new TransactionResource($data))->additional(['success' => true]);
            } else {
                $snapToken = json_decode($this->getSnapToken($data));
                $data = tap($data)->update([
                    "snap_token" => $snapToken->data
                ]);
                if ($snapToken->success) {
                    return (new TransactionResource($data))->additional(['success' => true]);
                } else {
                    return response([
                        'data'   => 'Get token failed, Please try again later',
                        'status' => 503,
                        'success' => false,
                    ]);
                }
            }
        } else {
            return response([
                'data'   => 'Unauthorized Action',
                'status' => 503,
                'success' => false,
            ]);
        }
    }
    public function store(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();

        //validate address
        $address = CustomerAddress::where('customer_id', $user->id ?? 0)->where('id', $request->address_id)->first();
        if (!$address) {
            return response([
                'success' => false,
                'message' => ['msg' => ['Address not found']],
            ], 200);
        }

        //validate rules
        $rules = [
            'courier'  => 'required|in:jne',
            'type' => 'required',
            'address_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response([
                'success' => false,
                'message' => $validator->errors(),
            ], 200);
        }


        //validate check out not empty
        $checkout_carts = $user->checkoutCarts;
        if ($checkout_carts->count() < 1) {
            return response([
                'success' => false,
                'message' => ['msg' => ['Checkout data kosong']],
            ], 200);
        }

        $volume = 0;
        $weight = 0;
        $total_price = 0;
        $details = array();

        //calculate weight
        foreach ($checkout_carts as $key => $cc) {
            $weight += ($cc->qty * $cc->product->weight);
            $volume += ($cc->product->dimension_width * $cc->product->dimension_height * $cc->dimension_depth);
            $total_price += ($cc->qty * $cc->product->price);
            //untuk transaction detail
            array_push($details, [
                'product_id' => $cc->product->id,
                'name' => $cc->product->name,
                'qty' => $cc->qty,
                'price' => $cc->product->price,
                'weight' => $cc->product->weight,
                'width' => $cc->product->dimension_width,
                'height' => $cc->product->dimension_height,
                'depth' => $cc->product->dimension_depth,
            ]);
        }

        $shipping_cost = 0;

        //get shipping cost 

        if ($request->courier == 'jne') {
            $ship_cost_data = app('App\Http\Controllers\API\ShippingController')->getJneCost($request);

            $ship_cost_data = $ship_cost_data->getData();
            $shipping_cost = 0;
            foreach ($ship_cost_data->data ?? [] as $scd) {
                if ($scd->service == $request->type) {
                    $shipping_cost = $scd->cost[0]->value;
                }
            }
        }

        //jika shipping cost 0 return error
        if ($shipping_cost == 0) {
            return response([
                'success' => false,
                'message' => ['msg' => ['Get Shipping Cost Error, Please try again later']],
            ], 200);
        }


        //untuk dimension
        $shipping_multiplier = 1;
        if ($volume > 1) {
            $shipping_multiplier = 1;
        }

        $total_shipping_cost = $shipping_cost * $shipping_multiplier;
        $discount = 0;
        $grand_total = $total_price + $total_shipping_cost - $discount;
        $data = [
            'uuid' => Str::uuid()->toString(),
            'customer_id' => $user->id,
            'customer_name' => $user->first_name . ' ' . $user->last_name,
            'customer_email' => $user->email,
            'customer_phone' => $user->phone,
            'date' => date('Y-m-d'),
            'weight' => $weight,
            'total_price' => $total_price,
            'shipping_cost' => $shipping_cost,
            'shipping_multiplier' => $shipping_multiplier,
            'total_shipping_cost' => $total_shipping_cost,
            'grand_total' => $grand_total,
            'discount' => $discount,
            'status_id' => 1,
            'shipping_recipient_name' => $user->first_name . ' ' . $user->last_name,
            'shipping_recipient_number' => $user->phone,
            'shipping_address' => $address->address,
            'shipping_postal_code' => $address->postal_code,
            'shipping_country_id' => $address->country_id,
            'shipping_province_id' => $address->province_id,
            'shipping_city_id' => $address->city_id,
        ];

        $transaction = Transaction::create($data);
        $transaction->transactionDetails()->createMany($details);
        $transaction->transactionLogs()->create([
            'status_id' => 1,
            'status' => TransactionStatus::find(1)->name,
        ]);
        //hapus checkout cart
        return (new TransactionResource($transaction))->additional(['success' => true]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return response()->json([
            'data'   => 'Unauthorized Action',
            'status' => 503,
            'success' => false,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
            'data'   => 'Unauthorized Action',
            'status' => 503,
            'success' => false,
        ]);
    }



    private function getSnapToken($transaction)
    {
        $data = ['success' => true];

        $names = explode(" ", $transaction->customer_name);
        $customer_first_name = "";
        $customer_last_name = "";
        $counter = 0;
        foreach ($names as $name) {
            if ($counter == count($names) - 1) {
                //ambil paling belakang 
                $customer_last_name = $name;
            } else {
                $customer_first_name .= $name;
            }
            $counter++;
        }



        $params = [
            'transaction_details' => [
                'order_id' => $transaction->uuid,
                'gross_amount' => $transaction->grand_total
            ],
            'customer_details' => [
                'first_name' => $customer_first_name,
                'last_name' => $customer_last_name,
                'email' => $transaction->customer_email,
                'phone' => $transaction->customer_phone
            ]
        ];



        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SECRET_KEY');;
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $data['data'] = $snapToken;
        return json_encode($data);
    }

    public function payment(Request $request)
    {
        //data transaction_status , status_code, uuid
        // callback from midtrans

        $transaction = Transaction::where("uuid", $request->uuid)->first(); //nnti di ganti
        if (!$transaction) {
            return response([
                'data'   => 'Transaction not found',
                'status' => 404,
                'success' => false,
            ]);
        }
        //update transaction to sedang di proses
        $transaction = tap($transaction)->update([
            'status_id' => 2
        ]);

        //update log
        $transaction->transactionLogs()->create([
            'status_id' => 2,
            'status' => TransactionStatus::find(2)->name,
        ]);

        //create ledger
        $account_ledger = AccountLedger::create([
            'value' => $transaction->grand_total,
            'transaction_id' => $transaction->id,
            'account_id' => 2, //saldo di tahan
            'description' => 'Transfer dari ' . $transaction->customer_name . ' invoice ' . $transaction->uuid,
        ]);

        //recalculate account ledger
        dispatch(new RecalculateAccountLedgerJob($account_ledger));

        //return message
        return response([
            'success' => true,
            'data' => $transaction,
            'message' => 'Successfully Pay a Transaction'
        ], 200);
    }

    public function finishTransaction(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $rules = [
                'transaction_id'  => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response([
                    'success' => false,
                    'message' => $validator->errors(),
                ], 200);
            }
            $transaction = Transaction::find($request->transaction_id); //mungkin nnti di ganti uuid
            if (!$transaction) {
                return response([
                    'data'   => 'Transaction not found',
                    'status' => 404,
                    'success' => false,
                ]);
            } else if ($transaction->customer_id != $user->id) {
                return response([
                    'data'   => 'Unauthorized Action',
                    'status' => 503,
                    'success' => false,
                ]);
            } else {
                //update transaction to selesai
                $transaction = tap($transaction)->update([
                    'status_id' => 4
                ]);

                //update log
                $transaction->transactionLogs()->create([
                    'status_id' => 4,
                    'status' => TransactionStatus::find(4)->name,
                ]);

                //create ledger
                $account_ledger = AccountLedger::create([
                    'value' => $transaction->grand_total * -1,
                    'transaction_id' => $transaction->id,
                    'account_id' => 2, //saldo di tahan
                    'description' => 'Transaksi selesai atas nama ' . $transaction->customer_name . ' invoice ' . $transaction->uuid,
                ]);
                //recalculate account ledger
                dispatch(new RecalculateAccountLedgerJob($account_ledger));


                //create ledger
                $account_ledger = AccountLedger::create([
                    'value' => $transaction->grand_total,
                    'transaction_id' => $transaction->id,
                    'account_id' => 1, //saldo
                    'description' => 'Transaksi selesai atas nama ' . $transaction->customer_name . ' invoice ' . $transaction->uuid,
                ]);
                //recalculate account ledger
                dispatch(new RecalculateAccountLedgerJob($account_ledger));
                //return message
                return response([
                    'success' => true,
                    'data' => $transaction,
                    'message' => 'Successfully Finish a Transaction'
                ], 200);
            }
        } else {
            return response([
                'data'   => 'Unauthorized Action',
                'status' => 503,
                'success' => false,
            ]);
        }
    }
}
