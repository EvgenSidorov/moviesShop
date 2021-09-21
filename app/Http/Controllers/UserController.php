<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function signUp()
    {
        $user = User::all();

        dd($user->pluck('email_verified_at'));

        return view('auth.sign-up');
    }

    public function signUpSubmit(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'email:rfc,dns|unique:users',
            'phone' => 'required|digits:11',
            'password' => 'required|confirmed',
        ]);

        $user = User::saveUser($request->toArray());

        if ($user->exists) {
            return redirect()->route('app.home')->with('success', 'User is sign up');
        } else {
            return redirect()->route('app.home')->with('errors', 'User not created');
        }
    }
}
