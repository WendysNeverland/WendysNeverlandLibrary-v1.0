<?php

use Faker\Generator as Faker;

$factory->define(App\Narrator::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'tussenvoegsel' => $faker->randomElement($array = array ('van','den','van de', ' ')),
        'lastname' => $faker->lastName,
    ];
});
