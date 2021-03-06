<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'owner_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
