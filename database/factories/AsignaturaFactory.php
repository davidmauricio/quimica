<?php

use Faker\Generator as Faker;

$factory->define(App\Asignatura::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->sentence,
        'codigo'=>$faker->sentence
    ];
});
