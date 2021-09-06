<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $movies = Movie::query()->inRandomOrder()->limit(8)->get();
//        dd($movies);
        return view('index', [
            'movies' => $movies,
            'title' => 'Home'
        ]);
    }

    public function about(){
        return view('about', [
            'title' => 'About'
        ]);
    }
}
