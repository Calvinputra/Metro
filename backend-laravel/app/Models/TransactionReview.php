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
    protected $hidden = ['transaction_id', 'customer_id'];
    public function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    public function transaction(){
        return $this->belongsTo('App\Models\Transaction','transaction_id');
    }
}
