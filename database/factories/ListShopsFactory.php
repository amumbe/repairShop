<?php

use Faker\Generator as Faker;

$factory->define(App\listShops::class, function (Faker $faker) {
    return [
        'openingTime' =>$faker->time,
        'closingTime'=>$faker->time,
        'name'=>$faker->unique()->name,
    ];
});
