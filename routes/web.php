<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(
    [
        'namespace'  => '\App\Http\Controllers',
        'prefix'     => '',
        'middleware' => ['web'],
    ],
    function () {
        Route::get('home',['uses' => 'HomeController@index', 'as' => 'home.index']);
        Route::get('add',['uses' => 'HomeController@add', 'as' => 'home.add']);
        Route::post('save',['uses' => 'HomeController@save', 'as' => 'home.save']);
        Route::get('edit/{id}',['uses' => 'HomeController@edit', 'as' => 'home.edit']);
        Route::post('update',['uses' => 'HomeController@update', 'as' => 'home.update']);
        Route::get('show/{id}',['uses' => 'HomeController@show', 'as' => 'home.show']);
        Route::get('delete/{id}',['uses' => 'HomeController@delete', 'as' => 'home.delete']);
        Route::get('search',['uses' => 'HomeController@search', 'as' => 'home.search']);


    }
);
