<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'root', 'display_name' => 'Super Admin', 'created_at' => '2019-03-28 06:21:03', 'updated_at' => '2019-03-28 06:21:03'],
            ['id' => 2, 'name' => 'Admin', 'display_name' => 'Admin', 'created_at' => '2019-08-08 16:03:49', 'updated_at' => '2019-08-08 16:03:49'],
        ]);
    }
}
