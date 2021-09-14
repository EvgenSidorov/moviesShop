<?php

namespace App\Http\Controllers;

use App\Models\Movie;

/**
 *
 */
class MoviesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $request = request()->all();

        $movies = Movie::where('is_active', true)
            ->when(request()->has('query'), function ($q) {
                return $q->where('title', 'like', '%'.request('query').'%');
            })
            ->when(isset($request['query']), function ($q) use ($request) {
                return $q->where('title', 'like', '%'.$request['query'].'%');
            })
            ->when(isset($request['sort']), function ($q) use ($request) {

                //?sort=price_desc or sort=price_asc
                $sort = explode('_', $request['sort']);
                //$sort[0] это имя сортировки
                //$sort[1] это направление сортировки (asc|desc)


                if (count($sort) === 2) {
                    return $q->orderBy($sort[0], $sort[1]);
                }

                return $q;
            })
            ->paginate(8);

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
