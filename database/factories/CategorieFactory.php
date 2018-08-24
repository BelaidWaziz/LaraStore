<?php

use Faker\Generator as Faker;

$factory->define(App\Categorie::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->word,
        'Description'=>$faker->text(100)
    ];
});
