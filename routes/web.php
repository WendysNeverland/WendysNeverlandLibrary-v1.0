<?php

include('include/admin.php');


Route::get('/w', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
