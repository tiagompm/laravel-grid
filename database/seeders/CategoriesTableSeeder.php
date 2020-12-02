<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;



class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(100)->create();

        //factory(\App\Models\Category::class, 100)->create();
    }





}
