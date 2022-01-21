<?php

namespace App\Http\Controllers\Vendor\Voyager;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataUpdated;
use Validator;
use Voyager;
use App\Imports\ProductImport;
use Excel;

class ProductController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function checkAttributeRequired(Request $request)
    {
        $errors                  = array();
        $temp_transaction_detail = $request->transaction['product_attributes'] ?? array();
        $attribute_required      = Attribute::where('required', '1')->get();
        foreach ($attribute_required as $key => $attr) {
            $flag = false;
            foreach ($temp_transaction_detail as $key => $td) {
                if ($td['product_attribute_belongsto_attribute_relationship'] ?? $td['attribute_id'] == $attr->id) {
                    $flag = true;
                }
            }
            if (!$flag) {
                array_push($errors, [
                    'message' => "Attribute " . $attr->name . " dibutuhkan",
                ]);
            }
        }
        return $errors;
    }

    public function validateLines(Request $request)
    {
        /*custom validate*/
        $temp_transaction_detail = $request->transaction['product_attributes'] ?? array();

        //validasi attribute required
        $val = $this->checkAttributeRequired($request);
        foreach ($val as $key => $err) {
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors([
                    'attributes' => $err['message'],
                ]);
        }

        $transaction_detail = array();
        foreach ($temp_transaction_detail as $key => $td) {
            $rules = [

                'value' => 'required',
            ];
            $rules = array_merge($rules, isset($td['product_attribute_belongsto_attribute_relationship']) ? ['product_attribute_belongsto_attribute_relationship' => 'required|integer'] : ['attribute_id' => 'required|integer']);
            $messages = [
                'attribute_id.required'                                       => 'Attribute harus dipilih',
                'product_attribute_belongsto_attribute_relationship.required' => 'Attribute harus dipilih',
                'value.required'                                              => 'Value harus diisi',

            ];
            $validator = Validator::make($td, $rules, $messages);

            //validasi attribute id harus ada di db
            $attribute = Attribute::find($td['product_attribute_belongsto_attribute_relationship'] ?? $td['attribute_id']);
            if (!$attribute) {
                $validator->errors()->add(
                    'product_attribute_belongsto_attribute_relationship',
                    'Attribute not found!'
                );
            }

            if ($validator->fails()) {
                return redirect()->back()
                    ->withInput($request->input())
                    ->withErrors($validator->errors());
            }
        }

        return null;
        /*end*/
    }

    public function storeEditLines(Request $request, $id)
    {
        if (isset($id)) {

            $temp_transaction_detail = $request->transaction['product_attributes'] ?? array();
            $product                 = \App\Models\Product::where('id', $id)->first();

            $data = [];
            foreach ($temp_transaction_detail as $key => $td) {
                array_push($data, [
                    'attribute_id' => $td['product_attribute_belongsto_attribute_relationship'] ?? $td['attribute_id'],
                    'product_id'   => $product->id,
                    'value'        => $td['value'],
                ]);
            }

            $prev = \App\Models\ProductAttribute::where('product_id', $product->id)->delete();
            \App\Models\ProductAttribute::insert($data);
        }
    }

    // POST BR(E)AD
    public function update(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Compatibility with Model binding.
        $id = $id instanceof \Illuminate\Database\Eloquent\Model ? $id->{$id->getKeyName()} : $id;

        $model = app($dataType->model_name);
        $query = $model->query();
        if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope' . ucfirst($dataType->scope))) {
            $query = $query->{$dataType->scope}();
        }
        if ($model && in_array(SoftDeletes::class, class_uses_recursive($model))) {
            $query = $query->withTrashed();
        }

        $data = $query->findOrFail($id);

        // Check permission
        $this->authorize('edit', $data);

        // Validate fields with ajax
        $val          = $this->validateBread($request->all(), $dataType->editRows, $dataType->name, $id)->validate();
        $validate_val = $this->validateLines($request);
        if ($validate_val) {
            return $validate_val;
        }

        // Get fields with images to remove before updating and make a copy of $data
        $to_remove = $dataType->editRows->where('type', 'image')
            ->filter(function ($item, $key) use ($request) {
                return $request->hasFile($item->field);
            });
        $original_data = clone ($data);

        $this->storeEditLines($request, $id);
        $this->insertUpdateData($request, $slug, $dataType->editRows, $data);

        // Delete Images
        $this->deleteBreadImages($original_data, $to_remove);

        event(new BreadDataUpdated($dataType, $data));

        if (auth()->user()->can('browse', app($dataType->model_name))) {
            $redirect = redirect()->route("voyager.{$dataType->slug}.index");
        } else {
            $redirect = redirect()->back();
        }

        return $redirect->with([
            'message'    => __('voyager::generic.successfully_updated') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
            'alert-type' => 'success',
        ]);
    }

    /**
     * POST BRE(A)D - Store data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        // Validate fields with ajax
        $val          = $this->validateBread($request->all(), $dataType->addRows)->validate();
        $validate_val = $this->validateLines($request);
        if ($validate_val) {
            return $validate_val;
        }
        $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());
        $this->storeEditLines($request, $data->id);

        event(new BreadDataAdded($dataType, $data));

        if (!$request->has('_tagging')) {
            if (auth()->user()->can('browse', $data)) {
                $redirect = redirect()->route("voyager.{$dataType->slug}.index");
            } else {
                $redirect = redirect()->back();
            }

            return $redirect->with([
                'message'    => __('voyager::generic.successfully_added_new') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
                'alert-type' => 'success',
            ]);
        } else {
            return response()->json(['success' => true, 'data' => $data]);
        }
    }


    public function import_data(Request $request)
    {
        //protect route 
        $dataType = Voyager::model('DataType')->where('slug', '=', 'products')->first();
        $this->authorize('import', app($dataType->model_name));

        //send to preview
        $this->validate($request, [
            'import_file' => 'required|mimes:xlsx',
        ], []);
        $data = Excel::toCollection(new ProductImport, $request->file('import_file'));
        return view('vendor.voyager.products.import_preview', [
            'data' => $data,
            'excel_name' => $request->file('import_file')->getClientOriginalName(),
        ]);
    }
    public function confirm_import_data(Request $request)
    {
        //protect route 
        $dataType = Voyager::model('DataType')->where('slug', '=', 'products')->first();
        $this->authorize('import', app($dataType->model_name));

        ini_set('max_execution_time', 900);
        $validator = Validator::make($request->all(), [
            'import_data' => 'required',
            'excel_name' => 'required'
        ], []);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $data = json_decode($request->import_data);

        $validated_data = array();
        foreach ($data->Data as $row) {
            //TODO Row Validation
            $validator = Validator::make((array)$row, [
                'code' => 'nullable',
                'name' => 'required',
                'description' => 'nullable',
                'brand' => 'nullable',
                'price' => 'required|integer',
                'stock' => 'required|integer',
                'weight_gr' => 'required',
                'dimensionmm' => 'required',
                'image' => 'required',
                'category' => 'required',
            ], []);
            if ($validator->fails()) {
                $errorString = implode(",", $validator->messages()->all());
                return redirect('products')->with([
                    'message'    => "Failed import data " . $errorString,
                    'alert-type' => 'error',
                ]);
            }
            //split dimension
            $dimension = $row->dimensionmm;
            $dimension = str_replace("mm", "", $dimension);
            $dimension = explode("x", $dimension);

            //images 
            $images = array();
            if ($row->image != "") {
                array_push($images, '/products/' . $row->image);
            }
            if ($row->image_2 != "") {
                array_push($images, '/products/' . $row->image_2);
            }
            if ($row->image_3 != "") {
                array_push($images, '/products/' . $row->image_3);
            }
            if ($row->image_4 != "") {
                array_push($images, '/products/' . $row->image_4);
            }
            if ($row->image_5 != "") {
                array_push($images, '/products/' . $row->image_5);
            }



            //product category
            $category = Category::where('name', 'LIKE', $row->category)->first();
            if (!$category) {
                //kalo category not found
                $category = Category::create([
                    'name' => $row->category
                ]);
            }

            //product brand
            if (isset($row->brand)) {
                $brand = Brand::where('name', 'LIKE', $row->brand)->first();
                if (!$brand) {
                    //kalo category not found
                    $brand = Brand::create([
                        'name' => $row->brand,
                    ]);
                }
            } else {
                $brand = null;
            }

            //product attribute
            $product_attributes = array();
            if ($row->material != "") {
                $attribute = Attribute::where('name', 'LIKE', 'Material')->first();
                if (!$attribute) {
                    $attribute = Attribute::create([
                        'name' => 'Material',
                        'required' => 0,
                    ]);
                }
                array_push($product_attributes, [
                    'attribute_id' => $attribute->id,
                    'value' => $row->material
                ]);
            }
            if ($row->warna != "") {
                $attribute = Attribute::where('name', 'LIKE', 'Warna')->first();
                if (!$attribute) {
                    $attribute = Attribute::create([
                        'name' => 'Warna',
                        'required' => 0,
                    ]);
                }
                array_push($product_attributes, [
                    'attribute_id' => $attribute->id,
                    'value' => $row->warna
                ]);
            }

            if ($row->link_tokopedia != "") {
                $attribute = Attribute::where('name', 'LIKE', 'url_tokopedia')->first();
                if (!$attribute) {
                    $attribute = Attribute::create([
                        'name' => 'url_tokopedia',
                        'required' => 0,
                    ]);
                }
                array_push($product_attributes, [
                    'attribute_id' => $attribute->id,
                    'value' => $row->link_tokopedia
                ]);
            }

            if ($row->link_shopee != "") {
                $attribute = Attribute::where('name', 'LIKE', 'url_shopee')->first();
                if (!$attribute) {
                    $attribute = Attribute::create([
                        'name' => 'url_shopee',
                        'required' => 0,
                    ]);
                }
                array_push($product_attributes, [
                    'attribute_id' => $attribute->id,
                    'value' => $row->link_shopee
                ]);
            }


            $product_data = [
                'id' => $row->no,
                'code' => isset($row->code) ? strtoupper($row->code) : null,
                'name' => $row->name,
                'description' => $row->description ?? '',
                'brand_id' => ($brand->id) ?? null,
                'price' => $row->price,
                'display_price' => $row->price,
                'weight' => $row->weight_gr,
                'dimension_width' => $dimension[0] ?? '1',
                'dimension_height' => $dimension[1] ?? '1',
                'dimension_depth' => $dimension[2] ?? '1',
                'stock' => $row->stock ?? 0,
                'category_id' => $category->id,
                'images' => json_encode($images),
            ];

            //Insert to validated data
            array_push($validated_data, [
                'product_data' => $product_data,
                'product_attributes' => $product_attributes,
            ]);
        }

        foreach ($validated_data as $d) {

            $product = Product::create($d['product_data']);
            $product->attributes()->createMany($d['product_attributes']);
        }



        return redirect('products')->with([
            'message'    => "Successfully import data",
            'alert-type' => 'success',
        ]);
    }
}
