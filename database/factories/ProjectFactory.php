<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Groups;
use Faker\Generator as Faker;
use App\Students;

$factory->define(Groups::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'title'=>$faker->city,
        'description' => $faker->unique()->word,
        'average_math' => $faker->randomFloat(1,3,5),
        'average_history' => $faker->randomFloat(1,3,5),
        'average_literature' => $faker->randomFloat(1,3,5)
    ];
});

$factory->define(Students::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'name'=>$faker->name,
        'birth'=>$faker->date,
       'phoneNumber'=>$faker->e164PhoneNumber,
        'address'=>$faker->address

    ];
}); 
