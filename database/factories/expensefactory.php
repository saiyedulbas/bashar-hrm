<?php

use Faker\Generator as Faker;

$factory->define(App\expense::class, function (Faker $faker) {
    return [
        'item_name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'purchase_from' => $faker->city,
        'purchase_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'item_price' => $faker->randomDigitNotNull,
        
    ];
});
