<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// 
Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');


Route::get('/home', 'HomeController@index')->name('home');
