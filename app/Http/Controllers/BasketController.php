<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function add(Movie $movie){}
    public function remove(Movie $movie){}
    public function makeOrder(){}
}
