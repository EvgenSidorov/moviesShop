<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signUp(){
        return view('auth.sign-up');
    }
}
