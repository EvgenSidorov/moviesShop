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
        $newMovies = [];
        $basketItem = [
            'id' => $movie->id,
            'count' => 1,
            'title' => $movie->title,
            'price' => $movie->price
        ];

        foreach ($movies as $item) {
            if (($item['id'] == $basketItem['id'])) {
                $item['count']++;
                $addNewMovies = false;
            }
            $newMovies[] = $item;
        }
        $movies[] = $basketItem;
        $this->saveToBasket($movies);
        if (!$addNewMovies) {
            $this->saveToBasket($newMovies);
        }
        return redirect()->route('app.basket.index');
    }

    public function index()
    {
        $movies = $this->getBasket();
        return view('movies.cart', compact('movies'));
    }

    public function remove(Movie $movie)
    {
        $movies = $this->getBasket();
        $basketItem = [
            'id' => $movie->id,
            'count' => 1,
            'title' => $movie->title,
            'price' => $movie->price
        ];
        $newMovies = [];
        foreach ($movies as $item) {
            if (($item['id'] == $basketItem['id']) && $item['count'] > 1) {
                $item['count']--;
                $newMovies[] = $item;
            }
            if (!($item['id'] == $basketItem['id'])) {
                $newMovies[] = $item;
            }
        }
        $this->saveToBasket($newMovies);
        return redirect()->route('app.basket.index');
    }

    public function removeAll ()
    {
        $movies = [];
        $this->saveToBasket($movies);
        return redirect()->route('app.basket.index');
    }

    public function makeOrder()
    {
    }

    private function saveToBasket($items)
    {
        session()->put('basket', $items);
    }

    private function getBasket()
    {
        return session('basket', []);
    }
}
