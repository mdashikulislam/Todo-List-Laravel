<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'text'=>$faker->name,
        'body'=>$faker->paragraph,
        'due'=>$faker->dateTimeThisMonth
    ];
});
