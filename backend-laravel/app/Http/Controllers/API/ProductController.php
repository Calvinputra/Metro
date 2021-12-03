<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paginate_item = $request->paginate ?? 25;
        $products = Product::with('category')->orderBy('created_at', 'DESC');
        if (isset($request->s)) {
            $products = $products->where('name', "LIKE", "%" . $request->s . "%");
        }

        //jika kosong

        $products = $products->paginate($paginate_item);
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'data'   => 'Unauthorized Action',
            'status' => 503,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);
        if ($data) {
            return new ProductResource($data);
        } else {
            return response()->json([
                'data'   => 'Product not Found',
                'status' => 404,
            ]);
        }
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
        ]);
    }

    public function addToCart($id)
    {
    }
}
