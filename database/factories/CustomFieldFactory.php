<?php

use Faker\Generator as Faker;
use App\CustomField;

$factory->define(CustomField::class, function (Faker $faker) {
    return [
        'name' =>  str_random(10),
        'custom_field_type_id' => 1
    ];
});