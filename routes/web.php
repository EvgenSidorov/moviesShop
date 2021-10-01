<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/signUp', 'UserController@signUp')->name('app.signUp');
Route::get('/signIn', 'UserController@signIn')->name('app.signIn');
Route::post('/signUp/submit', 'UserController@signUpSubmit')->name('app.signUpSubmit');
Route::post('/signIn/submit', 'UserController@signInSubmit')->name('app.signInSubmit');
Route::get('/logout', 'UserController@logout')->name('app.logout');
Route::get('/movies', 'MoviesController@index')->name('app.movies.index');
Route::get('/movies/{movie}', 'MoviesController@view')->name('app.movies.view');
Route::group([
    'prefix' => '/basket',
    'name' => 'app.basket.'
], function(){
    Route::post('/add/{movie}', 'BasketController@add')->name('add');
    Route::post('/remove/{movie}', 'BasketController@remove')->name('remove');
});
