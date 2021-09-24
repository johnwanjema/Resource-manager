<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName' => 'John',
            'lastName' => 'Doe',
            'userType' => 'admin',
            'email' => 'admin@theremotecompany.com',
            'password' => Hash::make('password12345'),
        ]);
    }
}
