<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        "transaction_id",
        "product_id",
        "name",
        "qty",
        "price",
        "weight",
        "width",
        "height",
        "depth",

    ];
    public function product()
    {
        return $this->belongsTo("App\Models\Product", "product_id");
    }
}
