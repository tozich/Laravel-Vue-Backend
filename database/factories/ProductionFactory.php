<?php

$factory->define(App\Production::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "description" => $faker->name,
        "link" => $faker->name,
        "start_date" => $faker->name,
        "end_date" => $faker->name,
    ];
});
