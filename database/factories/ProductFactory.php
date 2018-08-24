<?php

use Faker\Generator as Faker;
use App\Categorie;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        //
        'Categorie_id'=>function(){
            return Categorie::All()->random();
        },
     'Name'=>$faker->word,
     'Description'=>$faker->text(100),
     'Price'=>$faker->numberBetween(100,2000),
     'Discount'=>$faker->numberBetween(5,20),
     'Stock'=>$faker->randomNumber(4)

    ];
});
