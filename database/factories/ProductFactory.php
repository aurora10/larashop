<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'         =>      $faker->sentence(3),
        'description'       =>      $faker->realText(500),
        'price'  => $faker->numberBetween(10, 50)
    ];
});
