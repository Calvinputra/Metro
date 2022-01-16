<?php

namespace App\Http\Resources;

use App\Models\Customer;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $user           = Customer::where('token', '=', $request->bearerToken())->first();
        $wishlist_exist = false;
        if ($user) {
            foreach ($user->wishlists as $key => $wl) {
                if ($wl->product_id == $this->id) {
                    $wishlist_exist = true;
                }
            }
        }
        $attributes = array();
        $url_tokopedia = null;
        $url_shopee = null;
        foreach ($this->attributes as $key => $attr) {
            if (strpos($attr->attribute->name, "url_") !== false) {
                if (strpos($attr->attribute->name, "url_tokopedia") !==  0) {
                    $url_tokopedia = $attr->attribute->value;
                }
                if (strpos($attr->attribute->name, "url_shopee") !==  0) {
                    $url_shopee = $attr->attribute->value;
                }
            } else {
                array_push($attributes, $attr);
            }
        }


        return [
            'id'               => $this->id,
            'name'             => $this->name,
            'description'      => $this->description,
            'display_price'    => $this->display_price,
            'price'            => $this->price,
            'weight'           => $this->weight,
            'dimension_width'  => $this->dimension_width,
            'dimension_height' => $this->dimension_height,
            'dimension_depth'  => $this->dimension_depth,
            'stock'            => $this->stock,
            'images'           => $this->images,
            'category'         => $this->category->name,
            'code'             => $this->code,
            'attributes'       => $attributes,
            'wishlist_exist'   => $wishlist_exist,
            'reviews'          => $this->reviews,
            'rating'           => $this->reviews->avg('rating') ?? 0,
            'url_tokopedia'    => $url_tokopedia,
            'url_shopee'       => $url_shopee,

        ];
    }
}
