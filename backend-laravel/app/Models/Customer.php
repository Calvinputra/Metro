<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
        'token',
    ];
    
    protected $hidden = ['password', 'token'];
    public function wishlists()
    {
        return $this->hasMany('App\Models\Wishlist', 'customer_id');
    }
    public function addresses()
    {
        return $this->hasMany('App\Models\CustomerAddress', 'customer_id')->with("city", "country", "province");
    }
    public function carts()
    {
        return $this->hasMany('App\Models\Cart', 'customer_id');
    }
    public function checkoutCarts()
    {
        return $this->hasMany('App\Models\Cart', 'customer_id')->where('process', 1)->with('product');
    }
    public function customerTokens()
    {
        return $this->hasMany('App\Models\CustomerToken', 'customer_id');
    }
    public function social()
    {
        return $this->hasMany('App\Models\CustomerSocial', 'customer_id');
    }

    public function hasSocialLinked($service)
    {
        return (bool) $this->social->where('service', $service)->count();
    }
  
}
