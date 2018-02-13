<?php

use App\Item\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    $item = [
        'store_id' => null,
        'name' => $faker->sentence,
        'price' => $faker->randomNumber(6),
        'stock' => $faker->numberBetween(10, 20),
    ];

    $item->image()->create(['path' => 'seeds/item.png']);

    return $item;
});
