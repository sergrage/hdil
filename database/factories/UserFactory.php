<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
	$name = $faker->name;
    return [
        'name' => $name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'status' => 'active',
        'role' => 'user',
        'image' => '/admin/img/user2-160x160.jpg',
        'slug' => Str::slug($name),
        'likesNumber' => 0,
        'commentsNumber' => 0,
        'remember_token' => str_random(10),
    ];
});
