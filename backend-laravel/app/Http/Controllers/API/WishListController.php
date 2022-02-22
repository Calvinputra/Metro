<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\WishListResource;
use App\Models\Customer;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class WishListController extends Controller
{
    public function index(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $data = Wishlist::where('customer_id', $user->id)->with('product')->orderBy('created_at', 'DESC');
            if ($request->s) {
                $data->whereHas('product', function ($q) use ($request) {
                    $q->where('name', "LIKE", "%" . $request->s . "%");
                });
            }

            return WishListResource::collection($data->get())->additional(["success" => true]);
        } else {
            return response()->json([
                'success' => false,
                'data'   => 'Unauthorized Action',
                'status' => 201,
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

            $wl = Wishlist::where('product_id', $request->product_id)->where('customer_id', $user->id)->first();
            $data = [
                'product_id'  => $request->product_id,
                'customer_id' => $user->id,
            ];
            if ($wl) {
                $wl->delete();
                $wl = null;
            } else {
                $wl = Wishlist::create($data);
            }

            return response([
                'success' => true,
                'data'    => $wl,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'data'   => 'Unauthorized Action',
                'status' => 503,
            ]);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'data'   => 'Unauthorized Action',
            'status' => 503,
            'success' => false,
        ]);
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
