<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rectangle;
use Faker\Generator as Faker;

$factory->define(Rectangle::class, function (Faker $faker) {
    return [
        'sideA' => $faker->numberBetween(1,100),
        'sideB' => $faker->numberBetween(1,100)
    ];
});
