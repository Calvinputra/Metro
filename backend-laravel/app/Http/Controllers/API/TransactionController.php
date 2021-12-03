<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        return ProvinceResource::collection(Province::where('country_id', $request->country_id ?? '0')->orderBy('name')->get());
    }
}
