<?php

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "project" => $faker->name,
        "link" => $faker->name,
        "description" => $faker->name,
        "time_needed" => $faker->name,
    ];
});
