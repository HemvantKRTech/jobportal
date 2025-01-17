<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            ['id' => 1, 'menu_slug' => 'role', 'permission_key' => 'browse_role'],
            ['id' => 2, 'menu_slug' => 'role', 'permission_key' => 'read_role'],
            ['id' => 3, 'menu_slug' => 'role', 'permission_key' => 'add_role'],
            ['id' => 4, 'menu_slug' => 'role', 'permission_key' => 'edit_role'],
            ['id' => 5, 'menu_slug' => 'role', 'permission_key' => 'delete_role'],
            ['id' => 6, 'menu_slug' => 'menu', 'permission_key' => 'browse_menu'],
            ['id' => 7, 'menu_slug' => 'menu', 'permission_key' => 'read_menu'],
            ['id' => 8, 'menu_slug' => 'menu', 'permission_key' => 'add_menu'],
            ['id' => 9, 'menu_slug' => 'menu', 'permission_key' => 'edit_menu'],
            ['id' => 10, 'menu_slug' => 'menu', 'permission_key' => 'delete_menu'],
            ['id' => 11, 'menu_slug' => 'setting', 'permission_key' => 'browse_setting'],
            ['id' => 12, 'menu_slug' => 'dashboard', 'permission_key' => 'browse_dashboard'],
            ['id' => 13, 'menu_slug' => 'bread', 'permission_key' => 'browse_bread'],
            ['id' => 14, 'menu_slug' => 'bread', 'permission_key' => 'read_bread'],
            ['id' => 15, 'menu_slug' => 'bread', 'permission_key' => 'add_bread'],
            ['id' => 16, 'menu_slug' => 'bread', 'permission_key' => 'edit_bread'],
            ['id' => 17, 'menu_slug' => 'bread', 'permission_key' => 'delete_bread'],
            ['id' => 18, 'menu_slug' => 'site_setting', 'permission_key' => 'browse_site_setting'],
            ['id' => 19, 'menu_slug' => 'site_setting', 'permission_key' => 'read_site_setting'],
            ['id' => 20, 'menu_slug' => 'site_setting', 'permission_key' => 'add_site_setting'],
            ['id' => 21, 'menu_slug' => 'site_setting', 'permission_key' => 'edit_site_setting'],
            ['id' => 22, 'menu_slug' => 'site_setting', 'permission_key' => 'delete_site_setting'],
            ['id' => 23, 'menu_slug' => 'site_setting', 'permission_key' => 'logo_site_setting'],
            ['id' => 24, 'menu_slug' => 'admin', 'permission_key' => 'browse_admin'],
            ['id' => 25, 'menu_slug' => 'admin', 'permission_key' => 'read_admin'],
            ['id' => 26, 'menu_slug' => 'admin', 'permission_key' => 'add_admin'],
            ['id' => 27, 'menu_slug' => 'admin', 'permission_key' => 'edit_admin'],
            ['id' => 28, 'menu_slug' => 'admin', 'permission_key' => 'delete_admin'],
            ['id' => 29, 'menu_slug' => 'admin', 'permission_key' => 'change_email'],
            ['id' => 30, 'menu_slug' => 'admin', 'permission_key' => 'change_password'],
            ['id' => 31, 'menu_slug' => 'admin', 'permission_key' => 'change_status'],
            ['id' => 67, 'menu_slug' => 'service', 'permission_key' => 'browse_service'],
            ['id' => 77, 'menu_slug' => 'media', 'permission_key' => 'browse_media'],
            ['id' => 78, 'menu_slug' => 'media', 'permission_key' => 'read_media'],
            ['id' => 79, 'menu_slug' => 'media', 'permission_key' => 'add_media'],
            ['id' => 80, 'menu_slug' => 'media', 'permission_key' => 'edit_media'],
            ['id' => 81, 'menu_slug' => 'media', 'permission_key' => 'delete_media'],
        ]);
    }
}
