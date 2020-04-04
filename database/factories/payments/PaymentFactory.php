<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Collex\Domain\Deals\Models\Deal;
use Collex\Domain\Payments\Models\Payment;
use Collex\Domain\Payments\Models\PaymentStatus;
use Collex\Domain\Payments\Models\PaymentType;
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

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'deal_id' => factory(Deal::class),
        'payment_type_id' => factory(PaymentType::class),
        'payment_status_id' => factory(PaymentStatus::class),
        'amount' => $faker->numberBetween(5000, 1000000),
        'created_at' => now(),
        'updated_at' => now()->addMinute()
    ];
});
