<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function add(Movie $movie)
    {
        $movies = $this->getBasket();
        $addNewMovies = true;
        $basketItem = [
            'id' => $movie->id,
            'count' => 1,
            'title' => $movie->title,
            'price' => $movie->price,
            'totalPrice' => $movie->price
        ];
        foreach ($movies as $key => $item) {
            if (($item['id'] == $basketItem['id'])) {
                $movies[$key]['count']++;
                $movies[$key]['totalPrice'] = $movies[$key]['count'] * $movies[$key]['price'];
                $addNewMovies = false;
            }
        }
        if ($addNewMovies) {
            $movies[] = $basketItem;
        }
        $this->saveToBasket($movies);
//        return redirect()->route('app.basket.index');
        return response()->json(['success' => true, 'countBasket' => $this->getBasketCount()]);
    }

    public function index()
    {
        $movies = $this->getBasket();
        return view('movies.cart', compact('movies'));
    }

    public function remove(Movie $movie)
    {
        $movies = $this->getBasket();
//        dd($movies);

//        переделать
        foreach ($movies as $key => $item) {
            if($item['id'] == $movie->id) {
                if ($item['count'] > 1) {
                    $movies[$key]['count']--;
                    $movies[$key]['totalPrice'] = $movies[$key]['count'] * $movies[$key]['price'];
                } elseif ($item['count'] == 1) {
                    unset($movies[$key]);
                }
            }

        }
        $this->saveToBasket($movies);
        return redirect()->route('app.basket.index');
    }

    public function removeAll ()
    {
        $this->saveToBasket([]);
        return redirect()->route('app.movies.index');
    }

    public function makeOrder()
    {
    }


}
