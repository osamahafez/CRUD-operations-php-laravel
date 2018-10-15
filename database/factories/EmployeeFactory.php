<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'position' => $faker->word,
        'rank' => $faker->randomElement(['fresh', 'junior', 'senior'])
    ];
});
