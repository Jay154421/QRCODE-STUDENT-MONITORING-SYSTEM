<?php

namespace Database\Seeders;

use App\Models\Parents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Mockery\Matcher\HasKey;

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {

            $addUser = new Parents();
            $addUser->name = $faker->name;
            $addUser->gender = $faker->randomElement(['male', 'female']);
            $addUser->age = $faker->randomNumber(2, 18, 65);
            $addUser->address = $faker->address;
            $addUser->phone = $faker->phoneNumber;
            $addUser->username = $faker->username;
            $addUser->password = Hash::make("password");
            $addUser->save();
        }
    }
}
