<?php

use Faker\Generator as Faker;

/*
php artisan db:seed --class=UsersTableSeeder

 composer dump-autoload -o
*/


$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->unique()->name,
        'slug' => $faker->unique()->slug(2), // это надо отключить или можно сделать ссылку из имени str_slug($name)
        'parent_id' => null,
    ];
});
