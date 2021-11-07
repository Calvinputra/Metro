<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $rules = [
                'product_id' => 'required',
            ];
            $product = Product::find($request->product_id);

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response([
                    'success' => false,
                    'message' => $validator->errors(),
                ], 200);
            } else if (!$product) {
                return response([
                    'success' => false,
                    'message' => ['msg' => ['Product not Found!.']],
                ], 200);
            }

            $cart = Cart::where('product_id', $request->product_id)->where('customer_id', $user->id)->first();
            $data = [
                'product_id'  => $request->product_id,
                'customer_id' => $user->id,
                'qty'         => $cart ? ($cart->qty + 1) : 1,
            ];
            if ($cart) {
                $cart = tap($cart)->update($data);

            } else {
                $cart = Cart::create($data);

            }

            return response([
                'success' => true,
                'data'    => $cart,
            ], 200);
        } else {
            return response()->json([
                'data'   => 'Unauthorized Action',
                'status' => 503,
            ]);
        }

    }
}
