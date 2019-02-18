<?php

use App\Model\Answer;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraphs(random_int(3,5), true),
        'user_id' => \App\User::pluck('id')->random(),
        'votes_count' => random_int(0,5)
    ];
});
