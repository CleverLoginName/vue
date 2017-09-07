<?php

use Faker\Generator as Faker;
use App\CustomFieldType;

$factory->define(CustomFieldType::class, function (Faker $faker) {
    return [
        'name' => str_random(10)
    ];
});
