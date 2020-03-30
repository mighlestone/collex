<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Collex\Domain\Users\Models\Fee;
use Collex\Domain\Users\Models\FeeType;
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

$factory->define(Fee::class, function (Faker $faker) {
    return [
        'fee_type_id' => factory(FeeType::class),
        'name' => $faker->name,
        'percentage' => $faker->randomNumber(4)
    ];
});
