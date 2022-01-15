<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Category;
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
        $category = Category::find($request->category ?? 0);
        if (isset($request->s)) {
            $products->where('name', "LIKE", "%" . $request->s . "%");
        }

        if (isset($request->category)) {
            $products->where('category_id', $request->category);
        }

        //jika kosong

        $products = $products->paginate($paginate_item);

        //category data title
        $header_title = "All Product";
        if ($category) {
            $header_title = $category->name;
        }
        return ProductResource::collection($products)->additional(["title" => $header_title]);
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
            'success' => false,
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
            'success' => false,
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
            'success' => false,
            'data'   => 'Unauthorized Action',
            'status' => 503,
        ]);
    }

    public function addToCart($id)
    {
    }
}
