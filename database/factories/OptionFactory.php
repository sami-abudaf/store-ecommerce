<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Option;
use Faker\Generator as Faker;

$factory->define(Option::class, function (Faker $faker) {
    return [
        'name' => $faker->text(20),
        'price' => $faker->numberBetween(10, 9000),
        'attribute_id' => $faker->numberBetween($min = 1, $max = 10),
        'product_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
