<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        "uuid",
        "customer_name",
        "customer_email",
        "customer_phone",
        "date",
        "weight",
        "total_price",
        "shipping_cost",
        "shipping_multiplier",
        "total_shipping_cost",
        "grand_total",
        "discount",
        "admin_id",
        "customer_id",
        "status_id",
        "shipping_recipient_name",
        "shipping_recipient_number",
        "shipping_address",
        "shipping_postal_code",
        "shipping_country_id",
        "shipping_province_id",
        "shipping_city_id",
        "resi_no",
        "snap_token",
        "shipping",
        "transaction_id",
        "transaction_expired_at",
        "midtrans_data"
    ];
    public function transactionDetails()
    {
        return $this->hasMany("App\Models\TransactionDetail", "transaction_id")->with('product');
    }
    public function transactionLogs()
    {
        return $this->hasMany("App\Models\TransactionLog", 'transaction_id');
    }
    public function transactionReview()
    {
        return $this->hasMany("App\Models\TransactionReview", "transaction_id");
    }
    public function status()
    {
        return $this->belongsTo('App\Models\TransactionStatus', 'status_id');
    }
    public function city()
    {
        return $this->belongsTo('App\Models\City', 'shipping_city_id');
    }
}
