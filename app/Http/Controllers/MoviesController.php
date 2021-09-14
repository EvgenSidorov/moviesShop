<?php

namespace App\Http\Controllers;

use App\Models\Movie;

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

        return view('movies.index', compact('movies'));
    }

    public function view(Movie $movie)
    {
        $this->setTitle($movie->title);
        $rating = rand(1, 10);

        return view('movies.card', compact('movie', 'rating'));
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


// как работает метод ->when() в builder
//удалить таблицу users.
//выполнить php artisan migrate
