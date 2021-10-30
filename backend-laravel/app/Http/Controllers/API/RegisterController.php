<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Customer;
use Illuminate\Validation\Rules\Password;
class RegisterController extends Controller
{
    public function register(Request $request){
        $rules = [
            'first_name'=>'required|min:3',
            'last_name'=>'required|min:3',
            'phone'=>'required|min:8',
            'email'=>'required|email|unique:customers,email',
            'password'=>['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->uncompromised()],
        ];
       
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response([
                'success'=>false,
                'message'=>$validator->errors()
            ],403);
        }

        $data = [
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>strtolower($request->email),
            'password'=>password_hash($request->password,PASSWORD_DEFAULT),
        ];

        $customer = Customer::create($data);

        return response([
            'success'=>true,
            'data'=>$customer
        ],200);



    }
}
