<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use PDO;
use Validator;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $carts = Cart::where('customer_id', $user->id)->with('product')->orderBy('created_at', 'DESC');
            if ($request->checkout) {
                $carts->where('process', 1);
            }
            return CartResource::collection($carts->get());
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

    public function storeMultiple(Request $request)
    {
        //function when logged in push from vuex to database
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            //uncheck all prev cart
            if (count($request->carts) > 0) {
                Cart::where('customer_id', $user->id)->update([
                    'process' => 0,
                ]);
            }
            foreach ($request->carts ?? [] as  $key => $c) {
                $c = (object)$c;
                $c->product = (object)$c->product;

                $rules = [
                    'id' => 'required',
                    'qty' => 'required|min:0',
                ];
                $validator = Validator::make((array)$c->product, $rules);
                if ($validator->fails()) {
                    return response([
                        'success' => false,
                        'message' => $validator->errors(),
                    ], 200);
                } else {
                    //success
                    //check previous cart exist
                    $prev_cart = Cart::where('customer_id', $user->id)
                        ->where('product_id', $c->product->id)->first();
                    if ($prev_cart) {
                        $prev_cart = tap($prev_cart)->update([
                            'qty' => $c->qty,
                            'process' => 1,
                        ]);
                    } else {
                        Cart::create([
                            'qty' => $c->qty,
                            'process' => 1,
                            'customer_id' => $user->id,
                            'product_id' => $c->product->id,
                        ]);
                    }
                }
            }
            return response()->json([
                'data' => $request->carts ?? []
            ]);
            // $carts = json_decode($request->carts);
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
