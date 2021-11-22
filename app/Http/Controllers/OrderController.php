<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index()
    {
//        $order = Order::with(['products', 'products.order', 'products.movie', 'movies', ])->where('id', 1)->get();
//        dd($order);
        $user = auth()->user();
        $deliverySum = config('app.deliverySum');
        $basketItems = $this->getBasket();
        $totalSum = $this->getBasketTotalSum();

        return view('order.index', compact( 'basketItems','user', 'totalSum', 'deliverySum'));
    }


    public function store(Request $request)
    {
        $totalSum = $this->getBasketTotalSum();

        $rules = [
            'name' => 'required|min:3',
            'email' => 'required',
            'phone' => 'required|digits:11',
        ];
        $delivery_type = $request->get('deliveryType');

        if($delivery_type == Order::DELIVERY_SHIPPING) {
            $rules['adress'] = 'required';
        }

        $deliverySum = $delivery_type == "2" ? 100 : 0;

        $this->validate($request, $rules);
        $order = new Order();
        $filds = [
            'user_id' => auth()->user()->id,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'totalSum' => $totalSum,
            'deliverySum' => $deliverySum,
        ];
        if($delivery_type == Order::DELIVERY_SHIPPING) {
            $filds['adress'] = $request->get('adress');
        }
        $order->fill($filds);
//        dd($order);
        $order->save();
//        dd(1);
//        $basketItems = $this->getBasket();  #???????????
        foreach ($this->getBasket() as $item){
//            dd($item);
            $order->products()->create( [
                'order_id' => $order->id,
                'movie_id' => $item['id'],
                'count' => $item['count'],
                'price' => $item['price'],
            ]);
        }
//        dd($order);
//        dd($order->load(['products', 'movies']));
    }
}
