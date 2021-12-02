<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Order;

class AccountController extends Controller
{

    public function index()
    {
//        $orders = Order::all()->where('id', 'user_id');


        $user = auth()->user();

//        dd($orders);
        return view('account.index', compact( 'user'));
    }

    public function showAll()
    {
        $orders = Order::with(['products', 'products.order', 'products.movie', 'movies',])
            ->where('user_id', auth()->user()->id)
            ->get();
        return view('account.showAll', compact('orders'));
    }

    public function show($number)
    {
//        $sdf = Order::where('id', 'order');
        $order = Order::with(['products', 'products.order', 'products.movie', 'movies',])
            ->where('user_id', auth()->user()->id)
            ->where('id', $number)
            ->get();
//        dd($order);
        return view('account.showOne', compact('order'));
    }
}
