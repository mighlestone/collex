<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Collex\Domain\Cards\Models\Card;
use Collex\Domain\Cards\Models\Manufacturer;
use Collex\Domain\Cards\Models\SubCategory;
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

$factory->define(Card::class, function (Faker $faker) {
    return [
        'manufacturer_id' => factory(Manufacturer::class),
        'sub_category_id' => factory(SubCategory::class),
        'name' => $faker->name,
        'description' => $faker->sentence(6),
        'release_date' => now()->subDecades(2),
        'estimated_total_produced' => $faker->randomNumber(6)
    ];
});
