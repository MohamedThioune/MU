<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {

    return [
        'adresse' => $faker->word,
        'site_web' => $faker->word,
        'code_postale' => $faker->word,
        'ville' => $faker->word,
        'pays' => $faker->word,
        'open_door' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
