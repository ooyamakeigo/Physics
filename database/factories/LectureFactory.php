<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lecture;
use Faker\Generator as Faker;

$factory->define(Lecture::class, function (Faker $faker) {
    return [
        'title' =>  $this->faker->realText(rand(15,40)),
        'comment' =>  $this->faker->realText(rand(15,40)),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
