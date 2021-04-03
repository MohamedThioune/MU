<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Share;
use Faker\Generator as Faker;

$factory->define(Share::class, function (Faker $faker) {

    return [
        'url' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'video_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
