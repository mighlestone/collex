<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Collex\Domain\Cards\Models\Card;
use Collex\Domain\Deals\Models\Deal;
use Collex\Domain\Deals\Models\DealType;
use Collex\Domain\UserFunctions\Models\CardCondition;
use Collex\Domain\Users\Models\Address;
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

$factory->define(Deal::class, function (Faker $faker) {
    return [
        'buyer_id' => factory(User::class),
        'seller_id' => factory(User::class),
        'buyer_address_id' => factory(Address::class),
        'seller_address_id' => factory(Address::class),
        'card_id' => factory(Card::class),
        'card_condition_id' => factory(CardCondition::class),
        'deal_type_id' => factory(DealType::class),
        'amount' => $faker->numberBetween(5000, 1000000),
        'quantity' => $faker->numberBetween(1, 10),
        'sealed_at' => now()
    ];
});
