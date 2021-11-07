<?php

namespace App\Http\Resources;

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
        return [
            'id'    => $this->id,
            'name'  => $this->name,
            'description' => $this->description,
            'display_price' => $this->display_price,
            'price' => $this->price,
            'weight' => $this->weight,
            'dimension_width' => $this->dimension_width,
            'dimension_height' => $this->dimension_height,
            'dimension_depth' => $this->dimension_depth,
            'stock' => $this->stock,
            'images' => $this->images,
            'category' => $this->category->name,
            'code' => $this->code,

        ];
    }
}
