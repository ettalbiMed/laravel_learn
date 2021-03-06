<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        //
    ];
});
