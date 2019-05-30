<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Option;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Option::class, function (Faker $faker) {
    return [
        'title' => $faker-> numerify('Hello ###'),
        'poll_id' => $faker->numberBetween($min = 1, $max = 444),

    ];
});
