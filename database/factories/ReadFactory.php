<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Read;
use Faker\Generator as Faker;

$factory->define(Read::class, function (Faker $faker) {

    return [
        'time_read' => $faker->word,
        'video_id' => $faker->word,
        'user_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
