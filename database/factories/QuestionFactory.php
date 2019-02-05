<?php

use App\Model\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5,10)), '.'),
        'body' => $faker->paragraphs(random_int(3,5), true),
        'views' => random_int(1,10),
        'votes' => random_int(1,10),
        'answers' => random_int(1,10),
    ];
});
