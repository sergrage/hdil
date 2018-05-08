<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/cabinet', 'Cabinet\HomeController@index')->name('cabinet');
// Проверка email
Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');



Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');

// Страница Админки

// Route::group(
// 	[
//         'prefix' => 'admin',
//         'as' => 'admin.',
//         'namespace' => 'Admin',
//         'middleware' => ['auth'],
//     ],
//     function () {
// 		Route::get('/', 'HomeController@index')->name('home');
// 		Route::resource('users', 'UsersController');
// });
