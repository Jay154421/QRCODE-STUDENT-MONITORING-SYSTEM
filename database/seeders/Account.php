<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // Correctly import the Str class
use Illuminate\Support\Facades\Hash; // Correctly import the Hash facade
use Illuminate\Support\Facades\DB; // Correctly import the DB facade

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
    }
}

