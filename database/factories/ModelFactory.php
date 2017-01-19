<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->email,
//     ];
// });


$factory->define(App\Entities\Person::class, function ($faker){
	return [
	'name'=> $faker->name,
	'nick_name'=> $faker->firstname,
	'genre'=> $faker->randomElement(['F', 'M'])
	];
});

$factory->define(App\Entities\Phone::class, function ($faker){
	return [
	'description'=> $faker->randomElement(['Residencial', 'Comercial', 'Celular', 'Recados']),
	'code_country'=> $faker->optional(0.7, 55)->numberBetween(1,197),
	'ddd'=> $faker->numberBetween(11,91),
	'prefix'=> $faker->randomNumber(4),
	'sufix'=> $faker->randomNumber(4),
	'person_id'=> $faker->numberBetween(1,30)
	];
});