<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->words($nb = 3, $asText = true),
        'summary' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'cover' => $faker->imageUrl(800, 600, 'animals'),
    ];
});
