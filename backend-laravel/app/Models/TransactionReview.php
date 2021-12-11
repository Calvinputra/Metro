<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'review',
        'rating',
        'customer_id',
        'product_id',
        'transaction_id',
    ];
}
