<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\Category;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        Product::factory(100)
            ->create()
            ->each(function (Product $model) use ($categories) {
                $categoriesCol = $categories->random(5);
                $model->categories()->attach($categoriesCol->pluck('id')->toArray());
            });


        // factory(\App\Models\Product::class, 100)
        //     ->create()
        //     ->each(function (\App\Models\Product $model) use ($categories) {
        //         $categoriesCol = $categories->random(5);
        //         $model->categories()->attach($categoriesCol->pluck('id')->toArray());
        //     });
    }
}
