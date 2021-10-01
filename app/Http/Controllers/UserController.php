<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function signUp()
    {
//        $user = User::all();

        return view('auth.sign-up');
    }

    public function signIn()
    {
//        $user = User::all();

        return view('auth.sign-in');
    }

//    public function logout(){
//
//    }


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

    public function signInSubmit(Request $request)
    {

         $this->validate($request, [
            'email' => 'email:rfc,dns|exists:users,email',
            'password' => 'required',
        ]);

        $user = User::firstWhere('email', $request->get('email'));
//        dd($user);

        if($user){
            Auth::attempt($user);
            return redirect(route('app.home'));
        }
        return redirect(route('app.signInSubmit'))->whithErrors([
            'form-error' => 'Произошла ошибка авторизации'
        ]);
//        $user = User::firstWhere('email', $request->get('email'));

//        dd($user);
//        1. нужно сгенерировать такой же хеш, как при создании юзера
//        2. сравнить пароли из базы с  сгенерированным
//        3. succsess авторизовать, если нет ошибка
//        4. пути проверки методы ( ... Auth::loginUsingId($userId, $remember = true); Auth::attempt();)
//        5. есть методы которые сами проверяют пароль и автоизуют user
//        6. если ты авторизован то запрет на страницу авторизации

//        if ($user->exists) {
//            return redirect()->route('app.home')->with('success', 'User is sign up');
//        } else {
//            return redirect()->route('app.home')->with('errors', 'User not created');
//        }
    }


}
