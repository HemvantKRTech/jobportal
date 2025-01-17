<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_role')->insert([
           
            [
                'id' => 1,
                'admin_id' => 1,
                'role_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
