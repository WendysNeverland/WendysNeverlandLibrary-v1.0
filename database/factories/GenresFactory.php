<?php

use Faker\Generator as Faker;

$factory->define(App\Genre::class, function (Faker $faker) {
    return [
        'genre'=>$faker->randomElement($array = array ('Fantasy','Drama','Classic')),
    ];
});
