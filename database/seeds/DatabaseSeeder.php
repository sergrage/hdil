<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
=======
        factory(User::class, 10)->create();
>>>>>>> 18c44751e1b11181bc2343ec50628b6fbe43e10d
    }
}
