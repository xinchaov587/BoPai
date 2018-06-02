<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Admin::class, function (Faker $faker) {
    static $password;
    return [
        'username' => 'admin',
        'password' => $password ? $password : $password = bcrypt('qwe1123'),
        'remember_token' => ''
    ];
});
