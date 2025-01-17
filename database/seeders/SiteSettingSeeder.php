<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_settings')->insert([
            'id' => 1,
            'title' => 'Payroll',
            'description' => 'Partner with an award-winning app development company to take your brick-and-mortar business online and reach a wider audience with powerful mobile and web solutions.',
            'logo' => '1',
            'favicon' => '2',
            'email' => 'asif@artechnology.in',
            'contact_no' => '+91 9315647380',
            'country' => '0',
            'state' => 'Chandigarh',
            'city' => 'Chandigarh',
            'address' => 'F-26 Phase 8 Mohali Chandigarh',
            'created_at' => '2022-06-26 15:46:11',
            'updated_at' => '2024-09-13 00:58:32'
        ]);
    }
}
