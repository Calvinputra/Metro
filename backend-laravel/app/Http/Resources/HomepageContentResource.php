<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class HomepageContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    protected $take;
    public function setTake($take)
    {
        $this->take = $take;
        return $this;
    }
    public function toArray($request)
    {
        $products = array();
        $parsed_products = json_decode($this->products);
        $counter = 0;
        foreach ($parsed_products as $key => $id) {

            $product = Product::find($id);
            $product_resource = new ProductResource($product);
            array_push($products, $product_resource);

            $counter++;
            if ($counter >= $this->take) break;
        }
        return [
            'id' => $this->id,
            'title'   => $this->title,
            'code'   => $this->code,
            'products'   => $products,
        ];
    }
    
    public static function collection($resource){
        return new HomepageContentResourceCollection($resource);
    }
}
