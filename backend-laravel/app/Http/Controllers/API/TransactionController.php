<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
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
        $transactions = Transaction::where('customer_id', $user->id ?? '0')->orderBy('created_at', 'DESC');
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
            return (new TransactionResource($data))->additional(['success' => true]);
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
        $checkout_carts = $user->checkout_carts;
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
        $ship_cost_data = app('App\Http\Controllers\API\ShippingController')->getJNECost($request);

        $ship_cost_data = $ship_cost_data->getData();
        if ($request->courier == 'jne') {
            $shipping_cost = $ship_cost_data->data[0]->cost[0]->value;
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

        //hapus checkout cart
        return (new TransactionResource($transaction))->additional(['success' => true]);
    }
}
