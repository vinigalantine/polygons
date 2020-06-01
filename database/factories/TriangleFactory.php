<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Triangle;
use Faker\Generator as Faker;

$factory->define(Triangle::class, function (Faker $faker) {
    return [
        'sideA' => $faker->numberBetween(1,100),
        'sideB' => $faker->numberBetween(1,100),
        'sideC' => $faker->numberBetween(1,100)
    ];
});
