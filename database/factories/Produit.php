<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'categorie' => $faker->jobTitle,
        'description' => $faker->text($maxNbChars = 200),
        'prix' => $faker->numberBetween($min = 1000, $max =9000 ),
        'origine' => $faker->country, 
    ];
});
