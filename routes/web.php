<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// use Illuminate\Support\Facades\Mail;
 
// Route::get('/123', function () {
 
//     $data = [
//         'title' => 'Test email',
//         'content' => 'content'
//     ];
 
//     Mail::send('emails.test', $data, function($message) 
//     {
//         $message->to('elenergetica87@gmail.com', 'sergey')->subject('hello how are you?');
//     });
// });


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

// Заполнение профайла после регистрации
Route::get('/fillprofile', 'FillProfile\FillprofileController@index')->name('fillprofile');
Route::post('/fillprofile', 'FillProfile\FillprofileController@store')->name('fillprofile.store');
Route::get('/fillprofile/edit', 'FillProfile\FillprofileController@edit')->name('fillprofile.edit');
Route::post('/fillprofile/update/{id}', 'FillProfile\FillprofileController@update')->name('fillprofile.update');

// Community
Route::get('/community', 'Community\UserController@index')->name('community');


// Проверка email
Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');

Route::group(
    [
        'prefix' => 'cabinet',
        'as' => 'cabinet.',
        'namespace' => 'Cabinet',
        'middleware' => ['auth'],
    ],
    function () {
        Route::get('/', 'CabinetController@index')->name('home');
        Route::get('/image', 'CabinetController@image')->name('image');
        Route::post('skillsAutocomplete', 'SkillsAutocompleteController@skillsAutocomplete');
        Route::post('avatarUpload', 'AvatarUploadController@avatarUpload');
        // Route::post('carbonTest', 'UserController@carbonTest')->name('carbonTest');
});

Route::resource('messages', 'MessagesController');

// Route::group(['prefix' => 'messages'], function () {
//     Route::get('/', ['as' => 'messages', 'uses' => 'Messages\MessagesController@index']);
//     Route::get('create', ['as' => 'messages.create', 'uses' => 'Messages\MessagesController@create']);
//     Route::post('/', ['as' => 'messages.store', 'uses' => 'Messages\MessagesController@store']);
//     Route::get('{id}', ['as' => 'messages.show', 'uses' => 'Messages\MessagesController@show']);
//     Route::put('{id}', ['as' => 'messages.update', 'uses' => 'Messages\MessagesController@update']);
// });

Route::post('challenge', 'Cabinet\ChallengeController@store')->name('challenge');
// Route::post('addmoreskills', 'Cabinet\FillprofileController@addMoreSkillsPost');
// Route::post('avatarUpload', 'Cabinet\AvatarUploadController@avatarUpload');
// Route::post('skillsAutocomplete', 'Cabinet\SkillsAutocompleteController@skillsAutocomplete');

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
		
        Route::resource('/users', 'UserController');

		Route::post('/users/{user}/unBan', 'UserController@unBan')->name('users.unBan');
        Route::post('/users/{user}/ban', 'UserController@ban')->name('users.ban');
        Route::post('/users/{user}/verify', 'UserController@verify')->name('users.verify');
		Route::post('/users/clear', 'UserController@clearUsers')->name('users.clear');

        Route::resource('/categories', 'CategoryController');

        Route::post('/categories/{category}/up', 'CategoryController@up')->name('category.up');
        Route::post('/categories/{category}/down', 'CategoryController@down')->name('category.down');

        Route::resource('/cards', 'CardController');
});
