<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123'),
            'role_id' => '1'
        ]);
        DB::table('users')->insert([
            'username' => 'nasution',
            'name' => 'Nasution Haddar',
            'email' => 'nasution@example.com',
            'password' => bcrypt('nasution123'),
            'role_id' => '2'
        ]);
    }
}
