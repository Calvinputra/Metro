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

        return [
            'id'             => $this->id,
            'customer_id'    => $this->customer_id,
            'product_id'     => $this->product_id,
            'product'        => $product,
        ];
    }
}
