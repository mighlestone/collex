<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Collex\Domain\Cards\Models\Card;
use Collex\Domain\UserFunctions\Models\Ask;
use Collex\Domain\UserFunctions\Models\CardCondition;
use Collex\Domain\Users\Models\User;
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

$factory->define(Ask::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'card_id' => factory(Card::class),
        'card_condition_id' => factory(CardCondition::class),
        'price' => $faker->numberBetween(5000, 1500000),
        'expiry_date' => now()->addMonth()
    ];
});
