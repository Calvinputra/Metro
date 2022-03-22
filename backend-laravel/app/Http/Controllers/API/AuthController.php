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
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!$request->token) {
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
                    'message' => ['msg' => ['Email atau kata sandi salah']],
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
                'message' => ['msg' => ['Berhasil Melakukan Login']],
            ];

            return response($response, 201);
        } else {
            //login with token
            $user = Customer::where('token', $request->token)->with("addresses")->first();
            if ($user) {
                $response = [
                    'success' => true,
                    'user'    => $user,
                    'token'   => $request->token,
                    'message' => ['msg' => ['Berhasil Melakukan Login']],
                ];
                return response($response, 201);
            } else {
                return response([
                    'success' => false,
                    'message' => ['msg' => ['Token salah']],
                ], 201);
            }
        }
    }

    public function logout()
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $user->tokens()->delete();

            $user->update([
                'token' => null,
            ]);
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
            //'phone'       => 'required|min:8|unique:customers,phone|starts_with:08',
            'email'       => 'required|email|unique:customers,email',
            'password'    => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()],
            //'address'     => 'required|min:10',
            //'country'     => 'required',
            // 'province'    => 'required',
            //'city'        => 'required',
            //'postal_code' => 'required',
            'agreement_1' => 'accepted',
        ];
        $messages = [
            'first_name.required' => 'Nama depan wajib diisi',
            'last_name.required' => 'Nama belakang wajib diisi',
            'phone.required' => 'Nomor Telp wajib diisi',
            'phone.unique' => 'Nomor Telp sudah terpakai',
            'phone.starts_with' => 'Nomor Telp wajib diisi dengan format 08xxxxxxxxx',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format Email tidak valid',
            'email.unique' => 'Email sudah terpakai',
            'password.required' => 'Password wajib diisi',
            'password.confirmed' => 'Konfirmasi Password tidak sama dengan password',
            'address.required' => 'Alamat wajib diisi',
            'country.required' => 'Negara wajib dipilih',
            'province.required' => 'Provinsi wajib dipilih',
            'city.required' => 'Kota wajib dipilih',
            'postal_code.required' => 'Kode Pos wajib diisi',
            'agreement_1.required' => 'Anda Harus setuju dengan Kebijakan Privasi',
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
            //'phone'      => $request->phone,
            'email'      => strtolower($request->email),
            'password'   => password_hash($request->password, PASSWORD_DEFAULT),
        ];

        $customer = Customer::create($data);

        // $customer->addresses()->create([
        //     'name' => 'Home',
        //     'address' => $request->address,
        //     'postal_code' => $request->postal_code,
        //     'country_id' => $request->country,
        //     'province_id' => $request->province,
        //     'city_id' => $request->city,

        // ]);

        $token = $this->generateToken($customer, 'REGISTER CONFIRMATION TOKEN');

        //TODO SEND EMAIL
        dispatch(new SendEmailRegistrationJob($customer, $token));


        return response([
            'success' => true,
            'data'    => $customer,
        ], 200);
    }

    public function editProfile(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            $rules = [
                'first_name'  => 'required|min:3',
                'last_name'   => 'required|min:3',
                'phone'       => [
                    'required', 'min:8',
                    'starts_with:08',
                    Rule::unique('customers', 'phone')->ignore($user->id)
                ],
                'address'     => 'required|min:10',
                // 'country'     => 'required',
                'province'    => 'required',
                'city'        => 'required',
                'postal_code' => 'required',
            ];
            $messages = [
                'first_name.required' => 'Nama depan wajib diisi',
                'last_name.required' => 'Nama belakang wajib diisi',
                'phone.required' => 'Nomor Handphone wajib diisi',
                'phone.unique' => 'Nomor Handphone sudah terpakai',
                'phone.starts_with' => 'Nomor Handphone harus diawali dengan 08',
                'address.required' => 'Alamat wajib diisi',
                'country.required' => 'Negara wajib dipilih',
                'province.required' => 'Provinsi wajib dipilih',
                'city.required' => 'Kota wajib dipilih',
                'postal_code.required' => 'Kode Pos wajib diisi',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);


            if ($validator->fails()) {
                return response([
                    'success' => false,
                    'message' => $validator->errors(),
                ], 200);
            }
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
            ]);
            if ($user->addresses()->count() > 0) {
                $user->addresses()->first()->update([
                    'address' => $request->address,
                    'city_id' => $request->city,
                    'province_id' => $request->province,
                    'postal_code' => $request->postal_code,
                ]);
            } else {
                $user->addresses()->create([
                    'name' => 'Home',
                    'address' => $request->address,
                    'postal_code' => $request->postal_code,
                    'country_id' => $request->country,
                    'province_id' => $request->province,
                    'city_id' => $request->city,
                ]);
            }


            //return success
            return response()->json([
                'success' => true,
                'message' => ['msg' => ['edit profil berhasil ']],
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

    //GENERATE TOKEN FUNCTION
    private function generateToken($customer, $type)
    {
        $prev_data = null;
        $token = null;
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

    public function emailVerificationRequest(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            if ($user->email_verified_at) {
                return response()->json([
                    'success' => true,
                    'data'   => 'Email sudah terverifikasi',
                ]);
            } else {
                $token = $this->generateToken($user, 'REGISTER CONFIRMATION TOKEN');

                //TODO SEND EMAIL
                dispatch(new SendEmailRegistrationJob($user, $token));
                return response()->json([
                    'success' => true,
                    'data'   => 'Kode verifikasi telah dikirim, silahkan cek email Anda',
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
                    'message' => ['msg' => ['Berhasil melakukan verifikasi email']],
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
        if ($user) {
            return response()->json(['data' => $user] ?? ['message' => 'Unauthenticated']);
        } else {
            request()->user()->update([
                'token' => null,
            ]);
            request()->user()->currentAccessToken()->delete();
            return response()->json(['message' => 'Unauthenticated']);
        }
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

    public function checkForgetPasswordToken(Request $request)
    {
        $rules = [
            'token' => 'required|min:40|exists:customer_tokens,token',
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
            $response = [
                'success' => true,
                'message' => ['msg' => ['token valid']],
            ];
        } else {
            $response = [
                'success' => false,
                'message' => ['msg' => ['token invalid']],
            ];
        }
        //return success
        return response()->json($response);
    }

    //RESET PASSWORD => CHANGE PASSWORD
    public function resetPassword(Request $request)
    {
        //VALIDASI
        //pASSWORD required & konfirmasi harus sama

        $rules = [
            'token' => 'required|min:40|exists:customer_tokens,token',
            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()]
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
                    'message' => ['msg' => ['Berhasil melakukan reset password!']],
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

    //CHANGE PASSWORD FROM LOGGED USER
    public function changePasswordReset(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {

            $rules = [
                'token' => 'required|min:40|exists:customer_tokens,token',
                'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()]
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
                'message' => ['msg' => ['Berhasil melakukan reset password!']],
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

    public function changePassword(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {
            if (password_verify($request->old_password, $user->password)) {
                if (password_verify($request->password, $user->password)) {
                    return response()->json([
                        'success' => false,
                        'message' => ['msg' => ['Password lama dengan password baru sama']],
                    ]);
                }

                $rules = [
                    'old_password' => 'required',
                    'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()]
                ];
                $messages = [
                    'old_password.required' => 'password lama wajib diisi',
                    'password.required' => 'password wajib diisi',
                    'password.confirmed' => 'konfirmasi password tidak sama'
                ];
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
                    'message' => ['msg' => ['berhasil memperbaharui kata sandi']],
                    'data' => $user,
                ]);
            } else {
                //not authenticate
                return response()->json([
                    'success' => false,
                    'message' => ['msg' => ['Password lama salah']],
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
}
