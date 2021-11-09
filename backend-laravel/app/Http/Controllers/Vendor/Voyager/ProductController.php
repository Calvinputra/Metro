<?php

namespace App\Http\Controllers\Vendor\Voyager;

use App\Models\Attribute;
use App\Models\ProductAttribute;
use Auth;
use Illuminate\Http\Request;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataUpdated;
use Validator;
use Voyager;

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
                if ($td['product_attribute_belongsto_attribute_relationship'] == $attr->id) {
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
                'product_attribute_belongsto_attribute_relationship' => 'required|integer',
                'value'                                              => 'required',
            ];
            $messages = [
                'product_attribute_belongsto_attribute_relationship.required' => 'Attribute harus dipilih',
                'value.required'                                              => 'Value harus diisi',

            ];
            $validator = Validator::make($td, $rules, $messages);

            //validasi attribute id harus ada di db
            $attribute = Attribute::find($td['product_attribute_belongsto_attribute_relationship']);
            if (!$attribute) {
                $validator->errors()->add(
                    'product_attribute_belongsto_attribute_relationship', 'Attribute not found!'
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
                    'attribute_id' => $td['product_attribute_belongsto_attribute_relationship'],
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
}
