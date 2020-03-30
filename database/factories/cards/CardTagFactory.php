<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Collex\Domain\Cards\Models\Card;
use Collex\Domain\Cards\Models\CardTag;
use Collex\Domain\Cards\Models\Tag;
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

$factory->define(CardTag::class, function (Faker $faker) {
    return [
        'card_id' => factory(Card::class),
        'tag_id' => factory(Tag::class)
    ];
});
