<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Email;
use Faker\Generator as Faker;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'primary' => true,
        'status' => true
    ];
});
