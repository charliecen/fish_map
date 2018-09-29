<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/28
 * Time: 18:33
 */

$factory->define(App\Models\Admin::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'  =>  $faker->firstName,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});