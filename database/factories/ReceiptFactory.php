<?php

$factory->define(App\Receipt::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "description" => $faker->name,
        "technologies" => $faker->name,
        "project_duration" => $faker->name,
        "working_hours" => $faker->name,
        "price" => $faker->name,
    ];
});
