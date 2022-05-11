<?php

use Illuminate\Database\Seeder;

class CategoriesProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorieProduit = factory(App\ProductCategory::class, 3)->create();
        //
    }
}
