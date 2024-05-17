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
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'username' => 'parent',
            'password' => Hash::make('parent'),
            'role' => 'parent',

        ]);

        DB::table('users')->insert([
            'username' => 'student',
            'password' => Hash::make('student'),
            'role' => 'student',
        ]);
    }
}
