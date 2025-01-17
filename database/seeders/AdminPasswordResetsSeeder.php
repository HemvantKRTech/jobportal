<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminPasswordResetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_password_resets')->insert([
            [
                'email' => 'asifjamal@yopmail.com',
                'token' => '$2y$10$J/boDihlUPMgBF7L2uPVjeaYlLxKjQ4Ifo25TfhwBOt3UCix0kkYm',
                'created_at' => '2019-06-16 12:06:57',
            ],
            [
                'email' => 'asif.sanix@gmail.com',
                'token' => '$2y$10$cNoidIFR/27b5zYgCugNGeto1P2Dr0uHNen4gUahwteuP1vCgURlm',
                'created_at' => '2019-08-08 06:19:27',
            ],
        ]);
    }
}
