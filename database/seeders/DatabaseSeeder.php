<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        DB::table('users')->insert([
            'name' => 'Jhon Doe',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);
        $user = User::find(1);
        $user->assignRole('admin');
    }
}
