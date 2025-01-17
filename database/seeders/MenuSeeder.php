<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            [
                'slug' => 'about',
                'name' => 'About',
                'icon' => null,
                'parent' => 'page',
                'grand' => null,
                'ordering' => 1,
                'status' => 1,
            ],
            [
                'slug' => 'admin',
                'name' => 'Admin',
                'icon' => 'mdi mdi-account-lock',
                'parent' => null,
                'grand' => null,
                'ordering' => 4,
                'status' => 1,
            ],
            [
                'slug' => 'bread',
                'name' => 'Bread',
                'icon' => 'ft-target',
                'parent' => 'setting',
                'grand' => 'setting',
                'ordering' => 2,
                'status' => 1,
            ],
            [
                'slug' => 'check',
                'name' => 'Check',
                'icon' => 'bx bx-cog',
                'parent' => null,
                'grand' => null,
                'ordering' => 5,
                'status' => 1,
            ],
            [
                'slug' => 'config',
                'name' => 'Config',
                'icon' => 'mdi mdi-tools',
                'parent' => null,
                'grand' => null,
                'ordering' => 0,
                'status' => 1,
            ],
            [
                'slug' => 'dashboard',
                'name' => 'Dashboard',
                'icon' => 'bx bx-home-circle',
                'parent' => null,
                'grand' => null,
                'ordering' => 3,
                'status' => 1,
            ],
            [
                'slug' => 'media',
                'name' => 'Media',
                'icon' => 'bx bx-folder',
                'parent' => null,
                'grand' => null,
                'ordering' => 1,
                'status' => 1,
            ],
            [
                'slug' => 'menu',
                'name' => 'Menu',
                'icon' => null,
                'parent' => 'setting',
                'grand' => 'setting',
                'ordering' => 1,
                'status' => 1,
            ],
            [
                'slug' => 'role',
                'name' => 'Role',
                'icon' => null,
                'parent' => 'setting',
                'grand' => 'setting',
                'ordering' => 0,
                'status' => 1,
            ],
            [
                'slug' => 'service',
                'name' => 'Service',
                'icon' => null,
                'parent' => null,
                'grand' => null,
                'ordering' => 2,
                'status' => 1,
            ],
            [
                'slug' => 'setting',
                'name' => 'Setting',
                'icon' => 'mdi mdi-tools',
                'parent' => 'config',
                'grand' => null,
                'ordering' => 1,
                'status' => 1,
            ],
            [
                'slug' => 'site_setting',
                'name' => 'Site Setting',
                'icon' => 'bx bx-cog',
                'parent' => 'config',
                'grand' => null,
                'ordering' => 0,
                'status' => 1,
            ],
        ]);
    }
}
