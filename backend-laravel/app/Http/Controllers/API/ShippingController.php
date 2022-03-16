<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class ShippingController extends Controller
{
    public function getJneCost(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $weight_total = 0;
            foreach ($user->checkoutCarts as $key => $cc) {
                $weight_total += ($cc->product->weight * $cc->qty);
            }
            $response = Http::asform()->withHeaders([
                'key' => env('RAJAONGKIR_KEY', '0446e4bed19b2ca9b8ad4ea015a8db7f')
            ])->post(env('RAJAONGKIR_API_URL' . '/basic/cost', 'https://api.rajaongkir.com/basic/cost'), [
                'origin' => 151,
                'destination' => $user->addresses->first()->city_id,
                'courier' => 'jne',
                'weight' => $weight_total,
            ]);
            //Log::error($response);
            $data = json_decode($response->body(), false);

            return response()->json([
                'data'   => $data->rajaongkir->results[0]->costs,
                'status' => 200,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'data'   => 'Unauthorized Action',
                'status' => 503,
            ]);
        }
    }
    public function getJneWayBill(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $transaction = Transaction::where('customer_id', $user->id)->where('uuid', $request->uuid)->first();
            if ($transaction) {
                $response = Http::asform()->withHeaders([
                    'key' => env('RAJAONGKIR_KEY', '0446e4bed19b2ca9b8ad4ea015a8db7f')
                ])->post(env('RAJAONGKIR_API_URL' . '/basic/waybill', 'https://api.rajaongkir.com/basic/waybill'), [
                    'waybill' => $transaction->resi_no,
                    'courier' => 'jne',
                ]);
                $data = json_decode($response->body(), false);
                if ($data->rajaongkir->status->code != 200) {
                    return response()->json([
                        'success' => false,
                        'data' => $data->rajaongkir->status->description,
                        'status'   => $data->rajaongkir->status->code,
                    ]);
                } else {

                    //modified date
                    $manifest_data = array();
                    foreach ($data->rajaongkir->result->manifest as $key => $manifest) {
                        $date_view = Carbon::parse($manifest->manifest_date)->isoFormat('DD MMMM Y');
                        $manifest->manifest_date_view = $date_view;
                        array_push($manifest_data, $manifest);
                    }
                    $data->rajaongkir->result->manifest = $manifest_data;
                    return response()->json([
                        'success' => true,
                        'data'   => $data->rajaongkir->result,
                        'status'   => $data->rajaongkir->status->code,
                    ]);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'data'   => 'Unauthorized Action',
                    'status' => 503,
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'data'   => 'Unauthorized Action',
                'status' => 503,
            ]);
        }
    }

    public function cronFinishedTransaction()
    {
        $transactions = Transaction::whereNotNull('resi_no')->where('status_id', '=', '3')->get();
        foreach ($transactions as $key => $transaction) {
            $response = Http::asform()->withHeaders([
                'key' => env('RAJAONGKIR_KEY', '0446e4bed19b2ca9b8ad4ea015a8db7f')
            ])->post(env('RAJAONGKIR_API_URL' . '/basic/waybill', 'https://api.rajaongkir.com/basic/waybill'), [
                'waybill' => $transaction->resi_no,
                'courier' => 'jne',
            ]);
            $data = json_decode($response->body(), false);
            if ($data->rajaongkir->status->code != 200) {
                Log::error("Error Cron! : " . $data);
                //do nothing
            } else {
                if ($data->rajaongkir->result->delivered) {
                    app('App\Http\Controllers\Vendor\Voyager\TransactionController')->doFinishTransaction($transaction);
                }
            }
        }
    }
}
