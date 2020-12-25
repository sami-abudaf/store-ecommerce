<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->text(60),
        'photo' => $faker->imageUrl($width = 640, $height = 480),
        'is_active' => $faker->boolean(),
    ];
});
