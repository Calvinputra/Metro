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
    public function getInitialData(Request $request)
    {
        $data = json_decode(htmlspecialchars_decode($request->data));
        $product_data = array();
        if ($data) {
            foreach ($data as $d) {
                $product = Product::find($d);
                if ($product) {
                    array_push($product_data, $product);
                }
            }
            return response()->json([
                'success' => true,
                'data' => $product_data,
            ]);
        } else {
            return response()->json(['success' => false, 'data' => null]);
        }
    }
    public function getSelect2Format(Request $request)
    {
        $paginate_item = $request->paginate ?? 18;
        $products = Product::with('category')->orderBy('created_at', 'DESC');

        //filter
        if ($request->s) {
            //params s
            $products->where(function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->s . '%');
            });
        }

        $products = $products->paginate($paginate_item);
        $more = true;
        if ($products->lastPage() == $products->currentPage()) {
            $more = false;
        }
        $response = array();
        $results = array();
        foreach ($products as $key => $p) {
            array_push($results, [
                'id' => $p->id,
                'text' => $p->name
            ]);
        }

        $response["results"] = $results;
        $response["pagination"] = ["more" => $more];
        return response()->json($response);
    }

    public function index(Request $request)
    {
        $paginate_item = $request->paginate ?? 18;
        $products = Product::with('category')->orderBy('created_at', 'DESC');
        $category = Category::find($request->category ?? 0);
        if (isset($request->s)) {
            $products->where('name', "LIKE", "%" . $request->s . "%");
        }

        if (isset($request->category)) {
            $products->where('category_id', $request->category);
        }
        if (isset($request->order)) {
            $type = 'asc';
            if (isset($request->type) && strcasecmp($request->type, 'desc') == 0) {
                $type = 'desc';
            }
            //order
            $order_field = null;
            if ($request->order == 'product_terbaru') {
                $order_field = 'created_at';
            } else if ($request->order == 'harga_terbesar') {
                $order_field = 'price';
                $type = 'desc';
            } else if ($request->order == 'harga_terkecil') {
                $order_field = 'price';
                $type = 'asc';
            }

            $products->orderBy($order_field, $type);
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
                'data'   => 'Produk tidak ditemukan',
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

    
}
