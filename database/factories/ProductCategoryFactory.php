<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {

    return [
        'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        },
        'product_id' => function () {
            return factory(App\Product::class)->create()->id;
        },
        //
    ];
});
