<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use App\User;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'title' => $faker->word(5),
        'description' => $faker->text(120),
        'user_id' => User::pluck('id')->random()
    ];
});
