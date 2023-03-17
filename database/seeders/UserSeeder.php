<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=100; $i++)
        {
            $faker = Faker::create();
            $user = new User;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->city = $faker->city;
            $user->branch = 'CSE';
            $user->password = $faker->password;
        }
    }
}
