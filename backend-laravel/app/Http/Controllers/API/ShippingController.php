<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http;
use App\Models\Customer;

class ShippingController extends Controller
{
    public function get_jne_cost(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $weight_total = 0;
            foreach ($user->checkout_carts as $key => $cc) {
                $weight_total += ($cc->product->weight * $cc->qty);
            }
            $response = Http::asform()->withHeaders([
                'key' => env('RAJAONGKIR_KEY')
            ])->post(env('RAJAONGKIR_API_URL' . '/basic/cost', 'https://api.rajaongkir.com/basic/cost'), [
                'origin' => 151,
                'destination' => $user->addresses->first()->city_id,
                'courier' => 'jne',
                'weight' => $weight_total,
            ]);
            $data = json_decode($response->body(), false);
            return response()->json([
                'data'   => $data->rajaongkir->results[0]->costs,
                'status' => 200,
            ]);
        } else {
            return response()->json([
                'data'   => 'Unauthorized Action',
                'status' => 503,
            ]);
        }
    }
}
