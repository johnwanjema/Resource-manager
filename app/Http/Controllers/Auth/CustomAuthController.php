<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class CustomAuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {

        $user = User::where('email', $request['email'])->first();

        if(is_null($user)){
            return (new Controller())->toRouteWithMessage(
                'login',
                "Login Failed",
                "Check Your Login Credentials",
                "error"
            );
        }

        if (Auth::attempt(["email" => $request['email'], 'password' => $request['password'],])) {
            $user = Auth::user();
            return redirect('/admin');
          
        } else {
            return (new Controller())->toRouteWithMessage(
                'login',
                "Login Failed",
                "Check Your Login Credentials",
                "error"
            );
        }
    }
}
