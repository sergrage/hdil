<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // создается 10 категорий верхнего уровня
        factory(Category::class, 10)->create()->each(function(Category $category) {
        	$counts = [0, random_int(3, 7)];

            // для каждой создается от 3-7 подкатегорийю. присутствует связь children() 
            $category->children()->saveMany(factory(Category::class, $counts[array_rand($counts)])->create()->each(function(Category $category) {
                $counts = [0, random_int(3, 7)];
                // для каждой создается от 0 до 3-7 под-подкатегорий
                $category->children()->saveMany(factory(Category::class, $counts[array_rand($counts)])->make());
            }));
        });
    }
}
