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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('posts', PostController::class);
Route::get('/index','PostController@index')->name('index');
Route::get('/show/{id}','PostController@show')->name('show');

Route::get('/create','PostController@create')->name('create');
Route::post('/store','PostController@store')->name('store');

# Route::post('/edit','PostController@edit')->name('edit');
Route::get('/edit/{id}','PostController@edit')->name('edit');
Route::post('/update','PostController@update')->name('update');

Route::get('/destroy/{id}','PostController@destroy')->name('destroy');


// Route::get('/findJsonById/{id}','ClienteController@findJsonById')->name('findJsonById');
#Route::get('/posts','PostController@index')->name('posts');
#Route::post('/save','CorrentistaController@save')->name('salvar');