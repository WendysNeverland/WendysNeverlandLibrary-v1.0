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

Route::get('/book', 'BookController@index');
Route::get('/book/create', 'BookController@create');
Route::get('/book/{book}', 'BookController@show');
Route::post('/book', 'BookController@store');

Route::get('/genre', 'GenreController@index');
Route::get('/genre/create', 'GenreController@create');
Route::get('/genre/{genre}', 'GenreController@show');
Route::post('/genre', 'GenreController@store');

Route::get('/audiobook', 'AudioBookController@index');
Route::get('/audiobook/create', 'AudioBookController@create');
Route::get('/audiobook/{audioBook}', 'AudioBookController@show');
Route::post('/audiobook', 'AudioBookController@store');

Route::get('/narrator', 'NarratorController@index');
Route::get('/narrator/create', 'NarratorController@create');
Route::get('/narrator/{narrator}', 'NarratorController@show');
Route::post('/narrator', 'NarratorController@store');
