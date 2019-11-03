<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shoe;
use Faker\Generator as Faker;

$factory->define(Shoe::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomNumber(3),
        'description' => $faker->text,
        'produced_on' => now(),
    ];
});
