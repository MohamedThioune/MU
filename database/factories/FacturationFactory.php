<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Facturation;
use Faker\Generator as Faker;

$factory->define(Facturation::class, function (Faker $faker) {

    return [
        'month' => $faker->randomDigitNotNull,
        'state' => $faker->randomDigitNotNull,
        'user_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
