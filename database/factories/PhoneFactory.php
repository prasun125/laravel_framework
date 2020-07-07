<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phone;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'phone' => $faker->unique()->phoneNumber,
        'phone_verified_at' => now(),
        'primary' => true,
        'status' => true
    ];
});
