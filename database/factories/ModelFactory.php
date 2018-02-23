<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Gallery::class, function (Faker $faker) {
    return [
        'name' =>  $faker->text(20),
        'description' => $faker->text(255)
    ];
});

$factory->define(\App\Image::class, function (Faker $faker) {
    return [
        'url' => $faker->imageUrl($width = 250, $height = 200),
        'gallery_id' => $faker->numberBetween(1,10)];
});
