<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $rules = [
            'email'    => 'required',
            'password' => 'required',
        ];
        $messages = [
            'email.required'    => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response([
                'success' => false,
                'message' => $validator->errors(),
            ], 403);
        }

        $user = Customer::where('email', $request->email)->first();

        if (!$user || !password_verify($request->password, $user->password)) {
            return response([
                'success' => false,
                'message' => ['These credentials do not match our records.'],
            ], 401);
        }

        $token = $user->createToken('ApiToken')->plainTextToken;

        $response = [
            'success' => true,
            'user'    => $user,
            'token'   => $token,
        ];

        return response($response, 201);
    }
    public function logout()
    {
        auth()->logout();
        return response()->json([
            'success' => true,
        ], 200);
    }
}
