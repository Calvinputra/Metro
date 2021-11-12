<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            return CartResource::collection(Cart::where('customer_id', $user->id)->with('product')->orderBy('created_at', 'DESC')->get());
        } else {
            return response()->json([
                'data'   => 'Unauthorized Action',
                'status' => 503,
            ]);
        }
    }
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

    public function update(Request $request, $id)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $rules = [
                'qty' => 'required|min:0',
            ];
            $cart      = Cart::find($id);
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response([
                    'success' => false,
                    'message' => $validator->errors(),
                ], 200);
            } else if (!$cart && $cart->customer_id == $user->id) {
                return response([
                    'success' => false,
                    'message' => ['msg' => ['Cart not Found!.']],
                ], 200);
            }

            $data = [
                'qty' => $request->qty,
            ];
            $cart = tap($cart)->update($data);

            if (isset($request->process)) {
                $data = [
                    'process' => $request->process,
                ];
                $cart = tap($cart)->update($data);

            }

            return response([
                'success' => true,
                'data'    => $cart,
            ], 200);

        }
    }
    public function destroy(Request $request, $id)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $cart = Cart::find($id);
            if (!$cart && $cart->customer_id == $user->id) {
                return response([
                    'success' => false,
                    'message' => ['msg' => ['Cart not Found!.']],
                ], 200);
            } else {
                $cart->delete();

                return response([
                    'success' => true,
                ], 200);

            }
        }
    }
}
