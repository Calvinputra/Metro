<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;
    public function city(){
        return $this->belongsTo('App\Models\City','city_id');
    }
    public function country(){
        return $this->belongsTo('App\Models\Country','country_id');
    }
    public function province(){
        return $this->belongsTo('App\Models\Province','province_id');
    }
}
