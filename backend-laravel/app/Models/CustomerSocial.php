<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSocial extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'social_id',
        'service',
    ];
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
}
