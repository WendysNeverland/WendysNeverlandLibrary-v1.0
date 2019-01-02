<?php

use Faker\Generator as Faker;

$factory->define(App\AudioBook::class, function (Faker $faker) {
    return [
        'cover' => $faker->imageUrl(800, 600, 'cats'),
    ];
});
