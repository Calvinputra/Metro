<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_id',
        'product_id',
        'qty',
        'process'
    ];
    public function product(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
}
