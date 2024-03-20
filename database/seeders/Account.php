<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        DB::table('parents')->insert([
            'username' => 'parent',
            'password' => Hash::make('parent'),
        ]);

        DB::table('students')->insert([
            'username' => 'student',
            'password' => Hash::make('student'),
        ]);
    }
}
