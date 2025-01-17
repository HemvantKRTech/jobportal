<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role_permissions')->insert([
            ['role_id' => 1, 'permission_key' => 'add_admin'],
            ['role_id' => 1, 'permission_key' => 'add_bread'],
            ['role_id' => 1, 'permission_key' => 'add_media'],
            ['role_id' => 1, 'permission_key' => 'add_menu'],
            ['role_id' => 1, 'permission_key' => 'add_role'],
            ['role_id' => 1, 'permission_key' => 'add_site_setting'],
            ['role_id' => 1, 'permission_key' => 'browse_admin'],
            ['role_id' => 1, 'permission_key' => 'browse_bread'],
            ['role_id' => 1, 'permission_key' => 'browse_dashboard'],
            ['role_id' => 1, 'permission_key' => 'browse_media'],
            ['role_id' => 1, 'permission_key' => 'browse_menu'],
            ['role_id' => 1, 'permission_key' => 'browse_role'],
            ['role_id' => 1, 'permission_key' => 'browse_setting'],
            ['role_id' => 1, 'permission_key' => 'browse_site_setting'],
            ['role_id' => 1, 'permission_key' => 'change_email'],
            ['role_id' => 1, 'permission_key' => 'change_password'],
            ['role_id' => 1, 'permission_key' => 'change_status'],
            ['role_id' => 1, 'permission_key' => 'delete_admin'],
            ['role_id' => 1, 'permission_key' => 'delete_bread'],
            ['role_id' => 1, 'permission_key' => 'delete_media'],
            ['role_id' => 1, 'permission_key' => 'delete_menu'],
            ['role_id' => 1, 'permission_key' => 'delete_role'],
            ['role_id' => 1, 'permission_key' => 'delete_site_setting'],
            ['role_id' => 1, 'permission_key' => 'edit_admin'],
            ['role_id' => 1, 'permission_key' => 'edit_bread'],
            ['role_id' => 1, 'permission_key' => 'edit_media'],
            ['role_id' => 1, 'permission_key' => 'edit_menu'],
            ['role_id' => 1, 'permission_key' => 'edit_role'],
            ['role_id' => 1, 'permission_key' => 'edit_site_setting'],
            ['role_id' => 1, 'permission_key' => 'logo_site_setting'],
            ['role_id' => 1, 'permission_key' => 'read_admin'],
            ['role_id' => 1, 'permission_key' => 'read_bread'],
            ['role_id' => 1, 'permission_key' => 'read_media'],
            ['role_id' => 1, 'permission_key' => 'read_menu'],
            ['role_id' => 1, 'permission_key' => 'read_role'],
            ['role_id' => 1, 'permission_key' => 'read_site_setting'],
            ['role_id' => 2, 'permission_key' => 'browse_admin'],
            ['role_id' => 2, 'permission_key' => 'browse_dashboard'],
            ['role_id' => 2, 'permission_key' => 'browse_setting'],
            ['role_id' => 2, 'permission_key' => 'edit_admin'],
            ['role_id' => 2, 'permission_key' => 'read_admin'],
        ]);
    }
}
