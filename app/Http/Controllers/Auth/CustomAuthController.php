<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class CustomAuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request['email'])->first();

        if(is_null($user)){
            return Redirect::back()->withErrors(['email' => 'User not found, check your email.']);
        }

        if (Auth::attempt(["email" => $request['email'], 'password' => $request['password'],])) {
            $user = Auth::user();
            return redirect('/admin');
          
        } else {
            return Redirect::back()->withErrors([
                // 'email' => 'User not found, check your email.',
                'password' => 'Incorect credentials'
            ]);
        }
    }
}
