<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', 'HomeController@index')->name('home')->middleware('can:banned');
Route::get('/', 'HomeController@index')->name('home');


Auth::routes();



// Личный кабинет
Route::get('/cabinet', 'Cabinet\HomeController@index')->name('cabinet');

// Раполнение профайла после регистрации
// Route::get('/fillprofile', 'Cabinet\FillprofileController@index')->name('fillprofile');
// Route::put('/fillprofile/{user}', 'Cabinet\FillprofileController@update')->name('fillprofile.update');
// Route::get('/fillprofile/{user}', 'Cabinet\FillprofileController@edit')->name('fillprofile.edit');

Route::resource('/fillprofile', 'Cabinet\FillprofileController');



Route::post('addmoreskills', 'Cabinet\FillprofileController@addMoreSkillsPost');


// Проверка email
Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');

// Страница Админки
// Route::get('/administrator', 'LTE\HomeController@index')->name('lte');
// Route::resource('users', 'LTE\UsersController');


Route::post('avatarUpload', 'AvatarUploadController@avatarUpload');
Route::post('skillsAutocomplete', 'SkillsAutocompleteController@skillsAutocomplete');


// Страница Админки
Route::group(
	[
        'prefix' => 'administrator',
        'as' => 'admin.',
        'namespace' => 'LTE',
        'middleware' => ['auth', 'can:admin-panel', 'can:banned'],
    ],
    function () {
		Route::get('/', 'HomeController@index')->name('admin');
		
        Route::resource('/users', 'UsersController');

		Route::post('/users/{user}/unBan', 'UsersController@unBan')->name('users.unBan');
        Route::post('/users/{user}/ban', 'UsersController@ban')->name('users.ban');
        Route::post('/users/{user}/verify', 'UsersController@verify')->name('users.verify');
		Route::post('/users/clear', 'UsersController@clearUsers')->name('users.clear');

        Route::resource('/categories', 'CategoryController');

        Route::post('/categories/{category}/up', 'CategoryController@up')->name('category.up');
        Route::post('/categories/{category}/down', 'CategoryController@down')->name('category.down');

        Route::resource('/cards', 'CardsController');
});
