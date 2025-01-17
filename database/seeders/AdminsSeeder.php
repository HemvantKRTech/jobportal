<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'id' => 1,
                'role_id' => 1,
                'name' => 'Asif Jamal',
                'email' => 'admin@artechnology.in',
                'mobile' => '7894561230',
                'password' => Hash::make('123456'),  // Example hashed password
                'remember_token' => 'DUIfugWzj535F3m3f4jlHjIxn45hmCgFemTyBaBIAD2ycv8HtdRDOBHvXlw2',
                'status' => 'active',
                'avatar' => 'storage/admin/1656356138.jpeg',
                'cover_photo' => 'storage/admin/1656356175.jpeg',
                'gender' => 'male',
                'date_of_birth' => null,
                'created_at' => '2019-03-27 00:00:00',
                'updated_at' => '2024-09-12 09:19:49',
                'deleted_at' => null
            ],
            [
                'id' => 3,
                'role_id' => 2,
                'name' => 'Asif',
                'email' => 'asif@gmail.com',
                'mobile' => '12345678',
                'password' => Hash::make('123456'),   // Example hashed password
                'remember_token' => null,
                'status' => 'active',
                'avatar' => 'storage/admin/1656182005.jpeg',
                'cover_photo' => null,
                'gender' => 'female',
                'date_of_birth' => '2022-06-07',
                'created_at' => '2022-06-25 18:33:25',
                'updated_at' => '2022-06-25 19:21:18',
                'deleted_at' => '2022-06-25 19:21:18'
            ]
        ]);
    }
}
