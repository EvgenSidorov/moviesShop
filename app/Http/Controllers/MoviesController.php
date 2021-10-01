<?php

namespace App\Http\Controllers;

use App\Filters\MovieFiltr;
use App\Models\Movie;

/**
 *
 */
class MoviesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(MovieFiltr $filtr)
    {

//        $request = request()->all();
        $this->setTitle('Movies');
        $movies = Movie::filter($filtr)->paginate(8);



        $sortItems = [
            'id' => 'ID',
            'price' => 'Price',
        ];

        return view('movies.index', compact('movies', 'sortItems'));
    }


    /**
     * @param  Movie  $movie
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
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

//Homework
//1. Добавить новое поле в таблице movies, поле rating c типом float по умолчанию rating = 0.0
//2. Добавить новое поле в таблице users, поле phone varchar(30) nullable.
//3. Сделать страницу регистрации пользователей с на которой будет форма с полями name, email, phone.
//В этой задаче не забудь про роут и контроллер, советую назвать контроллер UserController.
