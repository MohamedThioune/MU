<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ResponseComment;
use Faker\Generator as Faker;

$factory->define(ResponseComment::class, function (Faker $faker) {

    return [
        'response_value' => $faker->word,
        'comment_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
