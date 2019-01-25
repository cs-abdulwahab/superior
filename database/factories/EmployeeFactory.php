<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {

    $d1 = Department::find(1)->id;
    $d2 = Department::find(2)->id;

    $deptids = Department::pluck('id');


    return [
        'name' => $faker->name,
        'phone' => 'phone1',
        'department_id' => $faker->randomElement([$deptids])
    ];
});

