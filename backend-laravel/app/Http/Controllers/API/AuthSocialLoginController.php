<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerSocial;
use Illuminate\Http\Request;
use Laravel\Sanctum\Sanctum;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;
use Carbon\Carbon;
use GuzzleHttp\Exception\ClientException;

class AuthSocialLoginController extends Controller
{
    protected $auth;
    public function __construct(Sanctum $auth)
    {
        $this->auth = $auth;
        $this->middleware('social');
    }
    function getRandomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    public function redirect($service)
    {
        return Socialite::driver($service)->stateless()->redirect();
    }
    public function callback($service)
    {
        try {
            $serviceUser = Socialite::driver($service)->stateless()->user();
        } catch (InvalidStateException $e) {
            return redirect(env('SANCTUM_STATEFUL_DOMAINS') . "/login/social-callback?error=Tidak bisa login dengan " . $service . ' Silahkan coba beberapa saat lagi');
            //throw $th;
        } catch (ClientException $e) {
            return redirect(env('SANCTUM_STATEFUL_DOMAINS') . "/login/social-callback?error=Tidak bisa login dengan " . $service . ' Silahkan coba beberapa saat lagi');
        }

        $email = $serviceUser->getEmail();
        $user = $this->getExistingUser($serviceUser, $email, $service);
        $first_name = "";
        $last_name = "";
        if ($serviceUser) {
            $name = explode(" ", $serviceUser->getName());
            if (count($name) == 1) {
                $first_name = $name[0];
                $last_name = $name[0];
            } else if (count($name) > 1) {
                $first_name = $name[0];
                array_shift($name);
                $last_name = implode(" ", $name);
            }
        }
        if (!$user) {

            $user = Customer::create([
                "email" => $email,
                "password" => password_hash($this->getRandomString(20), PASSWORD_DEFAULT),
                "first_name" => $first_name,
                "last_name" => $last_name,
                "email_verified_at" => Carbon::now()
            ]);
        }

        if ($this->needToCreateSocial($user, $service)) {
            CustomerSocial::create([
                'customer_id' => $user->id,
                'social_id' => $serviceUser->getId(),
                'service' => $service,
            ]);
        }

        $token = $user->createToken('ApiToken')->plainTextToken;
        $user->update([
            'token' => $token,
        ]);

        return redirect(env('SANCTUM_STATEFUL_DOMAINS') . "/login/social-callback?token=" . $token);
    }
    public function needToCreateSocial(Customer $customer, $service)
    {
        return !$customer->hasSocialLinked($service);
    }
    public function getExistingUser($serviceUser, $email, $service)
    {
        if ($service == 'google') {
            return Customer::where('email', $email)->orWhereHas('social', function ($q) use ($serviceUser, $service) {
                $q->where('social_id', $serviceUser->getId())->where('service', $service);
            })->first();
        } else {
            return null;
        }
    }
}
