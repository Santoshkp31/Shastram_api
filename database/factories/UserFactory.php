<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
	$role =  $faker->randomElement(['Student', 'Teacher']);
    return [
        'fname'=> $faker->firstName,
        'mname'=> $faker->lastName,
        'lname'=> $faker->lastName,
        'gender'=>$faker->randomElement(['Male', 'female']),
        'role'=> $role,
        'department'=> $faker->randomElement(['MCA', 'BSc.CA', 'BBA', 'MBA', 'BSc.IT', 'BCM']),
        'semester'=> $role == 'Teacher'? '' : $faker->numberBetween(1,6),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
