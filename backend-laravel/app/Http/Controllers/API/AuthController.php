<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerToken;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Jobs\SendEmailRegistrationJob;
use App\Jobs\SendEmailResetPasswordRequestJob;


class AuthController extends Controller
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
            ], 201);
        }

        $user = Customer::where('email', $request->email)->with("addresses")->first();

        if (!$user || !password_verify($request->password, $user->password)) {
            return response([
                'success' => false,
                'message' => ['msg' => ['These credentials do not match our records.']],
            ], 201);
        }

        $token = $user->createToken('ApiToken')->plainTextToken;
        $user->update([
            'token' => $token,
        ]);
        $response = [
            'success' => true,
            'user'    => $user,
            'token'   => $token,
            'message' => ['msg' => ['successfully logged in']],
        ];

        return response($response, 201);
    }
    
    public function logout()
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $user->update([
                'token' => null,
            ]);
            $user->currentAccessToken()->delete();
        }

        return response()->json([
            'success' => true,
        ], 200);
    }

    public function register(Request $request)
    {
        $rules = [
            'first_name'  => 'required|min:3',
            'last_name'   => 'required|min:3',
            'phone'       => 'required|min:8|unique:customers,phone|starts_with:08',
            'email'       => 'required|email|unique:customers,email',
            'password'    => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->uncompromised()],
            'address'     => 'required|min:10',
            'country'     => 'required',
            'province'    => 'required',
            'city'        => 'required',
            'postal_code' => 'required',
            'agreement_1' => 'accepted',
            'agreement_2' => 'accepted',
        ];
        $messages = [
            'first_name.required' => 'Nama depan wajib diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response([
                'success' => false,
                'message' => $validator->errors(),
            ], 200);
        }

        $data = [
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'phone'      => $request->phone,
            'email'      => strtolower($request->email),
            'password'   => password_hash($request->password, PASSWORD_DEFAULT),
        ];

        $customer = Customer::create($data);

        $customer->addresses()->create([
            'name' => 'Home',
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'country_id' => $request->country,
            'province_id' => $request->province,
            'city_id' => $request->city,

        ]);

        $token = $this->generateToken($customer, 'REGISTER CONFIRMATION TOKEN');

        //TODO SEND EMAIL
        dispatch(new SendEmailRegistrationJob($customer, $token));


        return response([
            'success' => true,
            'data'    => $customer,
        ], 200);
    }

    //GENERATE TOKEN FUNCTION
    private function generateToken($customer, $type)
    {
        $prev_data = null;
        do {
            $token = Str::random(40);
            $prev_data = CustomerToken::where('token', $token)->first(); //create unique token
        } while ($prev_data);
        $customer->customerTokens()->create([
            'type' => $type,
            'expired_at' => Carbon::now()->addDays(3),
            'token' => $token,
        ]);
        return $token;
    }

    //TO VERIFY EMAIL FROM TOKEN
    public function verifyEmail(Request $request)
    {
        $rules = ['token' => 'required|min:40|exists:customer_tokens,token'];
        $messages = ['token.required' => 'token wajib diisi', 'token.min' => 'token invalid'];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response([
                'success' => false,
                'message' => $validator->errors(),
            ], 200);
        }
        $token = CustomerToken::where('token', $request->token)->where('type', 'REGISTER CONFIRMATION TOKEN')->first();
        if ($token) {
            $now = Carbon::now();
            $expired = Carbon::createFromDate($token->expired_at);
            if ($token->used == false && $now < $expired) {

                $token->update(['used' => true]);
                $token->customer()->update([
                    'email_verified_at' => Carbon::now(),
                ]);
                $response = [
                    'success' => true,
                    'message' => ['msg' => ['Succesfully Verify your email']],
                    'data' => $token->customer,
                ];
            } else {
                $response = [
                    'success' => false,
                    'message' => ['msg' => ['token expired']],
                ];
            }
        } else {
            $response = [
                'success' => false,
                'message' => ['msg' => ['token invalid']],
            ];
        }
        return response()->json($response);
    }

    public function user()
    {
        $user = Customer::where('token', '=', request()->bearerToken())->with("addresses")->first();

        return $user ?? null;
    }

    //SEND EMAIL TO CUSTOMER TO RESET PASSWORD
    public function forgotPasswordRequest(Request $request)
    {

        $rules = [
            'email'    => 'required|email|exists:customers,email',
        ];
        $messages = [
            'email.required' => 'Email wajib diisi',
            'email.email'    => 'Format email salah',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        //
        if ($validator->fails()) {
            return response([
                'success' => false,
                'message' => $validator->errors(),
            ], 201);
        }
        //

        $user_data = Customer::where('email', $request->email)->first();


        //GENERATE TOKEN
        $token = $this->generateToken($user_data, 'RESET PASSWORD TOKEN');

        //TODO send email
        dispatch(new SendEmailResetPasswordRequestJob($user_data, $token));




        return response()->json([
            'success' => true,
            'message' => 'Silahkan check email Anda!',
            //'password'=>password_hash('CALVIN123',PASSWORD_DEFAULT),

        ]);
    }


    //RESET PASSWORD => CHANGE PASSWORD
    public function resetPassword(Request $request)
    {
        //VALIDASI
        //pASSWORD required & konfirmasi harus sama

        $rules = [
            'token' => 'required|min:40|exists:customer_tokens,token',
            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->uncompromised()]
        ];
        $messages = ['token.required' => 'token wajib diisi', 'token.min' => 'token invalid'];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response([
                'success' => false,
                'message' => $validator->errors(),
            ], 200);
        }
        $token = CustomerToken::where('token', $request->token)->where('type', 'RESET PASSWORD TOKEN')->first();
        if ($token) {
            $now = Carbon::now();
            $expired = Carbon::createFromDate($token->expired_at);
            if ($token->used == false && $now < $expired) {

                $token->update(['used' => true]);
                //UPDATE PASSWORD dengan HASH password_hash(<var>,PASSWORD_DEFAULT);
                $token->customer()->update([
                    'password' => password_hash($request->password, PASSWORD_DEFAULT),
                ]);
                $response = [
                    'success' => true,
                    'message' => ['msg' => ['Succesfully Reset your password']],
                    'data' => $token->customer,
                ];
            } else {
                $response = [
                    'success' => false,
                    'message' => ['msg' => ['token expired']],
                ];
            }
        } else {
            $response = [
                'success' => false,
                'message' => ['msg' => ['token invalid']],
            ];
        }



        //return success
        return response()->json($response);
    }

    //CHANGE PASSWORD
    public function changePassword(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {

            $rules = [
                'token' => 'required|min:40|exists:customer_tokens,token',
                'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->uncompromised()]
            ];
            $messages = ['token.required' => 'token wajib diisi', 'token.min' => 'token invalid'];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return response([
                    'success' => false,
                    'message' => $validator->errors(),
                ], 200);
            }

            $user->update([
                'password' => password_hash($request->password, PASSWORD_DEFAULT),
            ]);

            //return success
            return response()->json([
                'success' => true,
                'message' => ['msg' => ['Succesfully Reset your password']],
                'data' => $user,
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
