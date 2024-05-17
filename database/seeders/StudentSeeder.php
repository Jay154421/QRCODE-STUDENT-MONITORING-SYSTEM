<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use App\Models\User;
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
        for ($i = 1; $i <= 15; $i++) {
            $addUser = new Student();
            $addAcc = new User();
            $addUser->name = $faker->name;
            $addUser->gender = $faker->randomElement(['male', 'female']);
            $addUser->age = $faker->numberBetween(18, 25);
            $addUser->address = $faker->address;
            $addUser->year = $faker->numberBetween(1, 4);
            $addUser->course = 'BSCS';
            $addUser->parent = $faker->name;
            $addUser->parent_id = $i;
            // Assuming you want to generate a unique ID number for each student
            $addUser->idnumber = str_pad($i, 9, '2022-0000', STR_PAD_LEFT);
            $addAcc->student_id = $i;
            $addAcc->username = $faker->userName;
            $addAcc->password = Hash::make("password");
            $addAcc->role = 'student';
            $addAcc->save();
            $addUser->save();
        }

        // for ($i = 0; $i < 10; $i++) {
        //     $addUser = new Student();
        //     $addAcc = new User();
        //     $addUser->name = $faker->name;
        //     $addUser->gender = $faker->randomElement(['male', 'female']);
        //     $addUser->age = $faker->randomNumber(2, 18, 65);
        //     $addUser->address = $faker->address;
        //     $addUser->year = $faker->randomNumber(1, 4);
        //     $addUser->course = 'BSCS';
        //     $addUser->parent = 'sdadasdsa';
        //     $addAcc->student_id = $i;
        //     $addAcc->username = $faker->userName;
        //     $addAcc->password = Hash::make("password");
        //     $addAcc->role = 'student';
        //     $addAcc->save();
        //     $addUser->save();
        // }

        // DB::table('students')->insert([
        //     'idnumber' => '2022-2000',
        //     'name' => 'John Ambot',
        //     'gender' => 'male',
        //     'age' => '20',
        //     'year' => '2',
        //     'course' => 'Computer Science',
        //     'address' => '123 Main St',
        //     'parent' => 'Jane Ambot',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('users')->insert([
        //     'username' => 'john.ambot',
        //     'password' => Hash::make('123456'),
        //     'role' => 'student',

        // ]);

        // DB::table('students')->insert([
        //     'idnumber' => '2020-22233',
        //     'name' => 'Mark Klaro',
        //     'gender' => 'male',
        //     'age' => '21',
        //     'year' => '2',
        //     'course' => 'Computer Science',
        //     'address' => 'New York',
        //     'parent' => 'Luke Klaro',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);       
        // DB::table('users')->insert([
        //     'username' => 'john.ambot',
        //     'password' => Hash::make('123456'),
        //     'role' => 'student',
        // ]);
    }
}
