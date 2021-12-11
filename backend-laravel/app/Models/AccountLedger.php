<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountLedger extends Model
{
    use HasFactory;
    protected $fillable = [
        'value',
        'description',
        'transaction_id',
        'account_id',
    ];
    public function account(){
        return $this->belongsTo("App\Models\Account",'account_id');
    }
}
