<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->words(2, true),
        'description' => $faker->paragraph(),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 9.99, $max = 999.99),
        'size' => $faker->randomElement($array = ['XS', 'S', 'M', 'L', 'XL']),
        'url_image' => $faker->sentence(),
        'code' => $faker->randomElement($array = ['solde', 'new']),
        'reference' => $faker->isbn10()
    ];
});


