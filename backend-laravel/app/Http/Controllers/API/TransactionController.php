<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Customer;
use App\Http\Resources\TransactionResource;
use PDO;
use Validator;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        return TransactionResource::collection(Transaction::where('customer_id', $user->id ?? '0')->get());
    }
    public function show($id)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        $data = Transaction::where('customer_id', $user->id ?? '0')->where('id', $id)->first();
        if ($data) {
            return new TransactionResource($data);
        } else {
            return response([
                'data'   => 'Unauthorized Action',
                'status' => 503,
            ]);
        }
    }
    public function store(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();

        //nnti di benerin
        $rules = [
            'first_name'  => 'required|min:3',
            'last_name'   => 'required|min:3',
            'phone'       => 'required|min:8',
            'email'       => 'required|email|unique:customers,email',
            'password'    => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->uncompromised()],
            'address'     => 'required|min:10',
            'country'     => 'required',
            'province'    => 'required',
            'city'        => 'required',
            'postal_code' => 'required',
            'agreement_1' => 'accepted',
            'agreement_2' => 'accepted',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response([
                'success' => false,
                'message' => $validator->errors(),
            ], 200);
        }
        //validate lines
        $detail = array();


        $weight = 0;
        $total_price = 0;
        $shipping_cost = 0;
        $shipping_multiplier = 0;
        $total_shipping_cost = $shipping_cost * $shipping_multiplier;
        $discount = 0;
        $grand_total = $total_price + $total_shipping_cost - $discount;

        $data = [
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
            'shipping_recipient_name' => $request->shipping_recipient_name,
            'shipping_recipient_number' => $request->shipping_recipient_number,
            'shipping_address' => $request->shipping_address,
            'shipping_postal_code' => $request->shipping_postal_code,
            'shipping_country_id' => $request->shipping_country_id,
            'shipping_province_id' => $request->shipping_province_id,
            'shipping_city_id' => $request->shipping_city_id,
        ];
        $transaction = Transaction::create($data);
        return new TransactionResource($transaction);
    }
}
