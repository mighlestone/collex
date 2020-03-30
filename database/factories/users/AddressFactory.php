<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Collex\Domain\Users\Models\Address;
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

$factory->define(Address::class, function (Faker $faker) {
    return [
        'line_1' => $faker->address,
        'line_2' => $faker->streetAddress,
        'line_3' => $faker->secondaryAddress,
        'town_city' => $faker->city,
        'state_county_province' => $faker->state,
        'country' => $faker->country,
        'zip_post_code' => $faker->postcode
    ];
});
