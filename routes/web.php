<?php

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
    return view('LibraryHome');
});

Route::get('/author', 'AuthorController@index');
Route::get('/author/create', 'AuthorController@create');
Route::get('/author/{author}', 'AuthorController@show');
Route::post('/author', 'AuthorController@store');
