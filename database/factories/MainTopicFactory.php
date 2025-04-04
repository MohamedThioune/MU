<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MainTopic;
use Faker\Generator as Faker;

$factory->define(MainTopic::class, function (Faker $faker) {

    return [
        'libelle' => $faker->word,
        'subTopic_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
