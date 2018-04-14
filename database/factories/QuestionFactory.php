<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        //
        'body' => $faker->text,
        'a' => $faker->name,
        'b' => $faker->name,
        'c' => $faker->name,
        'd' => $faker->name,
        'Model_id' => 2,



    ];
});
