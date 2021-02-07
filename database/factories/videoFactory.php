<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {

    return [
        'main_title' => $faker->word,
        'title' => $faker->word,
        'description' => $faker->word,
        'motivation' => $faker->word,
        'vid' => $faker->word,
        'thumbnail' => $faker->word,
        'duration' => $faker->word,
        'request_monetize' => $faker->randomDigitNotNull,
        'is_monetize' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'mainTopic_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
