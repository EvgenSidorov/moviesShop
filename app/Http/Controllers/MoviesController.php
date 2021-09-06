<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::paginate(12);
//        dd($movies);
        return view('movies.index', [
            'movies' => $movies,
            'title' => 'All films'
        ]);
    }

    public function view(Movie $movie){
        return view('movies.card', [
            'movie' => $movie,
            'title' => $movie->title
        ]);
    }
}


// добавить Н1 заголовок для всех страниц должен передаваться из контроллера в шаблон
//  вывести в хедере ссылки на главную страницу и на каталог фильмов
//  используя метод route()
// сделать шаблон фильма карточка фильма
