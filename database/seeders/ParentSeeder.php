<?php

namespace Database\Seeders;

use App\Models\User;
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

        for ($i = 1; $i <= 15; $i++) {

            $addUser = new Parents();
            $addAcc = new User();
            $addUser->name = $faker->name;
            $addUser->gender = $faker->randomElement(['male', 'female']);
            $addUser->age = $faker->randomNumber(2, 18, 65);
            $addUser->address = $faker->address;
            $addUser->phone = $faker->phoneNumber;
            $addAcc->parent_id = $i;
            $addAcc->username = $faker->username;
            $addAcc->password = Hash::make("password");
            $addAcc->role = 'parent';
            $addAcc->save();
            $addUser->save();
        }
    }
}
