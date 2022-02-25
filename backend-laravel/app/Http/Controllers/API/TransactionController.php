<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionStatus;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Http\Resources\TransactionResource;
use PDO;
use Validator;
use Illuminate\Support\Str;


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

    public function checkTransaction($uuid)
    {
        $status = app('App\Http\Controllers\API\PaymentController')->checkTransactionStatus($uuid);
        $status = $status->getData();
        if ($status->success) {
            $data = [
                'order_id' => $uuid,
                'signature_key' => $status->data->signature_key,
                'gross_amount' => $status->data->gross_amount,
                'transaction_status' => $status->data->transaction_status,
                'status_code' => $status->data->status_code,
            ];
            $request = new Request($data);
            //call manually
            app('App\Http\Controllers\API\PaymentController')->midtransNotification($request);
        }
        return $status;
    }
    public function show($uuid, Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        $data = Transaction::where('customer_id', $user->id ?? '0')->where('uuid', $uuid)->first();
        if ($data) {
            if ($data->status_id == 1 && $data->snap_token) {
                //kalo masi menunggu pembayaran
                $response = $this->checkTransaction($data->uuid); //nnti kalo lama di dispatch ke job aja
                    if ($response->success) {
                    $data = Transaction::where('customer_id', $user->id ?? '0')->where('uuid', $uuid)->first();
                    $expire = date('Y-m-d H:i:s', strtotime($response->data->transaction_time . " +1 days"));
                    $data = tap($data)->update([
                        'midtrans_data' => json_encode($response),
                        'transaction_expired_at' => $expire,
                    ])->fresh();
                }
            }
            //refresh data

            if ($request->action && $request->action == 'get') {
                return (new TransactionResource($data))->additional(['success' => true]);
            } else {
                if ($data->snap_token) {
                    return (new TransactionResource($data))->additional(['success' => true]);
                } else {
                    $snapToken = json_decode(app('App\Http\Controllers\API\PaymentController')->getSnapToken($data));
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

        //shipping desc
        $shipping = null;
        if ($request->courier == 'jne') {
            if ($request->type == "CTC") {
                $shipping = "JNE (Reguler)";
            } else if ($request->type == "CTCYES") {
                $shipping = "JNE (YES)";
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
            'shipping' => $shipping,
        ];

        $transaction = Transaction::create($data);
        $transaction = tap($transaction)->update(['transaction_id' => "TR"  . str_pad($transaction->id, 7, "0", STR_PAD_LEFT)]);
        $transaction->transactionDetails()->createMany($details);
        $transaction->transactionLogs()->create([
            'status_id' => 1,
            'status' => TransactionStatus::find(1)->name,
        ]);
        //hapus checkout cart

        $user->checkoutCarts()->delete();

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
}
