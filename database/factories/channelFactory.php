<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\channel;
use Faker\Generator as Faker;

$factory->define(channel::class, function (Faker $faker) {

    return [
        'name' => $faker->text,
        'description' => $faker->text,
        'urlPhoto' => $faker->text,
        'user_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
