<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        factory(User::class, 10)->create();
    }
}
