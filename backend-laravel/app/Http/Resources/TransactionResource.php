<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)

    {
        $date_view = Carbon::parse($this->date)->isoFormat('DD MMMM Y');
        $expired_date_view = Carbon::parse($this->transaction_expired_at)->isoFormat('dddd, DD MMMM Y H:s');
    

        return [
            'uuid'   => $this->uuid,
            'customer_name' => $this->customer_name,
            'customer_email' => $this->customer_email,
            'customer_phone' => $this->customer_phone,
            'date' => $this->date,
            'weight' => $this->weight,
            'total_price' => $this->total_price,
            'shipping_cost' => $this->shipping_cost,
            'shipping_multiplier' => $this->shipping_multiplier,
            'total_shipping_cost' => $this->total_shipping_cost,
            'grand_total' => $this->grand_total,
            'discount' => $this->discount,
            'admin_id' => $this->admin_id,
            'customer_id' => $this->customer_id,
            'status_id' => $this->status_id,
            'shipping_recipient_name' => $this->shipping_recipient_name,
            'shipping_recipient_number' => $this->shipping_recipient_number,
            'shipping_address' => $this->shipping_address,
            'shipping_postal_code' => $this->shipping_postal_code,
            'shipping_country_id' => $this->shipping_country_id,
            'shipping_province_id' => $this->shipping_province_id,
            'shipping_city_id' => $this->shipping_city_id,
            'transaction_details' => $this->transactionDetails,
            'transaction_logs' => $this->transactionLogs,
            'date_view' => $date_view,
            'status' => $this->status,
            'snap_token' => $this->snap_token,
            'rating' => $this->transactionReview,
            'shipping' => $this->shipping,
            'transaction_id' => $this->transaction_id,
            'transaction_expired_at' => $expired_date_view,
            'midtrans_data' => $this->midtrans_data,
        ];
    }
}
