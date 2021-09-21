<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function signUp(){
        return view('auth.sign-up');
    }

    public  function signUpSubmit(ContactRequest $req){
        $user = new User();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->phone = $req->input('phone');
        $user->password = $req->input('password');
        $user->save();
        return redirect()->route('app.home');
    }
}
