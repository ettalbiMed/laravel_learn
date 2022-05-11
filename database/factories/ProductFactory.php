<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'reference' => $faker->name,
        'designation' => $faker->name,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        //
    ];
});
