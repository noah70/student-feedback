<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Teachers::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'secret_code' => str_random(10),
    ];
});

$factory->define(App\Models\Modules::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'code' => $faker->randomDigitNotNull,
        'teacher_id' => $faker->numberBetween(0, 100),
        'semester' => $faker->year,
        'year' => $faker->year,
        'type' => $faker->word,
        'secret_code' => str_random(10),
    ];
});