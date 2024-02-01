<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
          'name' => 'the super admin user',
          'email' => 'iamsuperadmin@gmail.com',
          'role' => 'super_admin',
          'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
          'name' => 'the teacher user',
          'email' => 'iamateacher@gmail.com',
          'role' => 'teacher',
          'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'the admin user',
            'email' => 'iamadmin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
          ]);
    }
}
