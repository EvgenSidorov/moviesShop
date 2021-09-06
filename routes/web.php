<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('app.home');
Route::get('/about', 'HomeController@about')->name('app.about');
Route::get('/movies', 'MoviesController@index')->name('app.movies.index');
Route::get('/movies/{movie}', 'MoviesController@view')->name('app.movies.view');
