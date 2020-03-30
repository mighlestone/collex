<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Collex\Domain\Users\Models\Address;
use Collex\Domain\Users\Models\User;
use Collex\Domain\Users\Models\UserAddress;
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

$factory->define(UserAddress::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'address_id' => factory(Address::class)
    ];
});
