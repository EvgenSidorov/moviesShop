<?php

namespace App\Http\Controllers;

use App\Models\Movie;

/**
 *
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $movies = Movie::query()->inRandomOrder()->limit(8)->get();

        return view('index', [
            'movies' => $movies,
            'title' => 'Home',
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function about()
    {
        return view('about', [
            'title' => 'About',
        ]);
    }
}
