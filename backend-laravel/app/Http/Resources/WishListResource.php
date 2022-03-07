<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WishListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)

    {
        $product = $this->product;
        $product['wishlist_exist'] = true;

        $attributes = array();
        $url_tokopedia = null;
        $url_shopee = null;
        foreach ($this->product->attributes as $key => $attr) {
            if (strpos($attr->attribute->name, "url_") !== false) {
                if (strpos($attr->attribute->name, "url_tokopedia") !==  false) {
                    $url_tokopedia = $attr->value;
                }
                if (strpos($attr->attribute->name, "url_shopee") !==  false) {
                    $url_shopee = $attr->value;
                }
            } else {
                array_push($attributes, $attr);
            }
        }

        $product['url_tokopedia'] = $url_tokopedia;
        $product['url_shopee'] = $url_shopee;



        return [
            'id'             => $this->id,
            'customer_id'    => $this->customer_id,
            'product_id'     => $this->product_id,
            'product'        => $product,
        ];
    }
}
