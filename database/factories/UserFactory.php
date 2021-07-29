<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'firstName' => $faker->word,
        'lastName' => $faker->word,
        'email' => $faker->word,
        'sex' => $faker->word,
        'age' => $faker->randomDigitNotNull,
        'phone' => $faker->word,
        'password' => $faker->word,
        'state' => $faker->randomDigitNotNull,
        'type' => $faker->word,
        'adresse' => $faker->word,
        'town' => $faker->word,
        'postalCode' => $faker->word,
        'date' => $faker->word,
        'date' => $faker->word,
        'timeout' => $faker->date('Y-m-d H:i:s'),
        'can_upload' => $faker->randomDigitNotNull,
        'country' => $faker->word,
        'is_valid' => $faker->randomDigitNotNull,
        'is_confirmed' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
