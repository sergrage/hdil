<?php

use Faker\Generator as Faker;

use App\Models\User;
use Illuminate\Support\Str;

/*
php artisan db:seed --class=UsersTableSeeder

 composer dump-autoload -o
*/


$factory->define(User::class, function (Faker $faker) {
	$active = $faker->boolean;
	$name = $faker->name;

    return [
        'name' => $name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'image' => '/admin/img/user2-160x160.jpg',
        'slug' => Str::slug($name),
        'likesNumber' => 0,
        'commentsNumber' => 0,
        'remember_token' => str_random(10),
        'verify_token' => $active ? null : Str::uuid() ,
        'status' => $active ? User::STATUS_ACTIVE : User::STATUS_WAIT,
        'role' => $active ? $faker->randomElement([User::ROLE_USER, User::ROLE_ADMIN]) : User::ROLE_USER,
    ];
});
