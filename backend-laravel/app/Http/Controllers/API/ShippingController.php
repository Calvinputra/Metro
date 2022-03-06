<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;

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
                'key' => env('RAJAONGKIR_KEY','0446e4bed19b2ca9b8ad4ea015a8db7f')
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
}
