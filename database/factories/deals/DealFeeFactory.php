<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Collex\Domain\Deals\Models\Deal;
use Collex\Domain\Deals\Models\DealFee;
use Collex\Domain\Users\Models\Fee;
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

$factory->define(DealFee::class, function (Faker $faker) {
    return [
        'deal_id' => factory(Deal::class),
        'fee_id' => factory(Fee::class)
    ];
});
