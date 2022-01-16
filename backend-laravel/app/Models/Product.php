<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Product extends Model implements Auditable
{
    protected $fillable = [
        "code",
        "name",
        "description",
        "display_price",
        "price",
        "weight",
        "dimension_width",
        "dimension_height",
        "dimension_depth",
        "stock",
        "images",
        "category_id",
        "brand_id",
    ];
    use HasFactory, SoftDeletes, \OwenIt\Auditing\Auditable;
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function attributes()
    {
        return $this->hasMany('App\Models\ProductAttribute', 'product_id')->with('attribute');
    }
    public function reviews()
    {
        return $this->hasMany('App\Models\TransactionReview', 'product_id')->with('transaction');
    }
   
}
