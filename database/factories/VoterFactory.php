<?php

use Faker\Generator as Faker;

$factory->define(App\Voter::class, function (Faker $faker) {
    return [
        'nsbe_id' => $faker->uuid
    ];
});
