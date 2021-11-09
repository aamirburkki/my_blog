<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jhon Doe',
            'role' => 'admin',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
