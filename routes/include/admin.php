<?php

Route::get('/admin/', function () {
    return view('admin/LibraryHome');
});

Route::get('/admin/author', 'AuthorController@index');
Route::get('/admin/author/create', 'AuthorController@create');
Route::get('/admin/author/{author}', 'AuthorController@show');
Route::post('/admin/author', 'AuthorController@store');

Route::get('/admin/book', 'BookController@index');
Route::get('/admin/book/create', 'BookController@create');
Route::get('/admin/book/{book}', 'BookController@show');
Route::post('/admin/book', 'BookController@store');

Route::get('/admin/genre', 'GenreController@index');
Route::get('/admin/genre/create', 'GenreController@create');
Route::get('/admin/genre/{genre}', 'GenreController@show');
Route::post('/admin/genre', 'GenreController@store');

Route::get('/admin/audiobook', 'AudioBookController@index');
Route::get('/admin/audiobook/create', 'AudioBookController@create');
Route::get('/admin/audiobook/{audioBook}', 'AudioBookController@show');
Route::post('/admin/audiobook', 'AudioBookController@store');

Route::get('/admin/narrator', 'NarratorController@index');
Route::get('/admin/narrator/create', 'NarratorController@create');
Route::get('/admin/narrator/{narrator}', 'NarratorController@show');
Route::post('/admin/narrator', 'NarratorController@store');

