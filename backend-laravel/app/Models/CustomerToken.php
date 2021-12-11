<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerToken extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'token',
        'customer_id',
        'expired_at',
        'used',
    ];
    public function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
}
