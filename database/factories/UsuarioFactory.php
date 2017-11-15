<?php

use Faker\Generator as Faker;

$factory->define(Peter\Usuario::class, function (Faker $faker) {
    $sexo = array('m','f');
    return [
        'nombre' => $faker->firstName,
        'apellidos' => $faker->lastname.' '.$faker->lastname,
        'edad' => $faker->numberBetween(18,40),
        'sexo' => $faker->randomElement($sexo), 
    ];
});
