<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom_client'  => $faker->firstName,
        'prenom'      => $faker->lastName,
        'num_permis'  => $faker->ean8,
        'email'       => $faker->email,
        'pays'        => $faker->country,
        'telephone'   => $faker->phoneNumber,
        'code_postal' => $faker->postcode,
    ];
});
