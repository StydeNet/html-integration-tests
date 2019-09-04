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

use Styde\Html\Str;

$factory->define(App\User::class, function (\Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->email,
        'password' => Str::random(10),
        'remember_token' => Str::random(10),
        'gender' => $faker->randomElement(['m', 'f'])
    ];
});
