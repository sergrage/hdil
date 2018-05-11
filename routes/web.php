<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/cabinet', 'Cabinet\HomeController@index')->name('cabinet');
// Проверка email
Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');

// Страница Админки
// Route::get('/administrator', 'LTE\HomeController@index')->name('lte');
// Route::resource('users', 'LTE\UsersController');


Route::group(
	[
        'prefix' => 'administrator',
        'as' => 'lte.',
        'namespace' => 'LTE',
        'middleware' => ['auth'],
    ],
    function () {
		Route::get('/', 'HomeController@index')->name('admin');
		Route::resource('/users', 'UsersController');
		Route::post('/users/{user}', 'UsersController@unBan')->name('users.unBan');
});
