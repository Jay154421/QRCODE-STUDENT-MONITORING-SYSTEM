<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {

            $addUser = new Student();
            $addUser->name = $faker->name;
            $addUser->gender = $faker->randomElement(['male', 'female']);
            $addUser->age = $faker->randomNumber(2, 18, 65);
            $addUser->address = $faker->address;
            // $addUser->username = "student";
            // $addUser->password = Hash::make("password");
            $addUser->save();
        }

        DB::table('students')->insert([
            'name' => 'John Doe',
            'gender' => 'male',
            'age' => '20',
            'year' => '2024',
            'course' => 'Computer Science',
            'address' => '123 Main St',
            'parent' => 'Jane Doe',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
