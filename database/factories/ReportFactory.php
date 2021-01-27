<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'visit_date' => $faker->date(),
        'detail' => $faker->realText(),
    ];
});
