<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $order = $this->getBasket();
//        dd($order);
        return view('order.index', compact('order'));
    }
}