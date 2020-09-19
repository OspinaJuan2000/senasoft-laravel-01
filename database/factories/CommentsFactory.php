<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'comment' => $faker->text(150),
        'user_id' => User::pluck('id')->random(),
        'posts_id' => User::pluck('id')->random()
    ];
});
