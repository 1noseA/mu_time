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

Route::get('/', 'HomeController@home');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'edit', 'update']]);

    Route::post('users/{id}/follow', 'UsersController@follow')->name('follow');
    Route::delete('users/{id}/unfollow', 'UsersController@unfollow')->name('unfollow');

    Route::resource('tweets', 'TweetsController');

    Route::resource('comments', 'CommentsController', ['only' => ['store', 'destroy']]);

    Route::resource('favorites', 'FavoritesController', ['only' => ['store', 'destroy']]);

    Route::post('/count', 'HomeController@count');
});