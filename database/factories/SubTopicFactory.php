<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Subtopic;
use Faker\Generator as Faker;

$factory->define(Subtopic::class, function (Faker $faker) {

    return [
        'libelle' => $faker->word,
        'mainTopic_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
