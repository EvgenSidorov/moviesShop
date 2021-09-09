<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::where('is_active', true)
            ->when(request()->has('query'), function($q){
                return $q->where('title', 'like', '%'.request('query').'%');
            })
            ->orderBy('price', 'desc')
            ->paginate(8);
//        dd($movies);

        return view('movies.index', [
            'movies' => $movies
//            'title' => 'All films'
        ]);
    }

    public function view(Movie $movie){
        return view('movies.card', [
            'movie' => $movie,
            'title' => $movie->title,
            'price' => $movie->price,
            'description' => $movie->description
        ]);
    }

}


// добавить Н1 заголовок для всех страниц должен передаваться из контроллера в шаблон
//  вывести в хедере ссылки на главную страницу и на каталог фильмов
//  используя метод route()


// среда
// сделать шаблон фильма карточка фильма вывести дескриптион
// сделать форму поиска
// сделать фильтр по цене
// сделать поиск по цене min max https://jqueryui.com/slider/#range


