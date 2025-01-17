<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medias')->insert([
            [
                'id' => 1,
                'file' => 'storage/media/2024/09/1675870540-logo.png',
                'icon' => null,
                'name' => '1675870540_logo',
                'slug' => '1675870540-logo',
                'type' => 'png',
                'original_name' => '1675870540_logo.png',
                'size' => '8.33 KB',
                'handle' => '1675870540-logo',
                'created_at' => '2024-09-13 06:24:41',
                'updated_at' => '2024-09-13 06:24:41',
            ],
            [
                'id' => 2,
                'file' => 'storage/media/2024/09/1675870540-favicon.png',
                'icon' => null,
                'name' => '1675870540_favicon',
                'slug' => '1675870540-favicon',
                'type' => 'png',
                'original_name' => '1675870540_favicon.png',
                'size' => '2.66 KB',
                'handle' => '1675870540-favicon',
                'created_at' => '2024-09-13 06:28:23',
                'updated_at' => '2024-09-13 06:28:23',
            ],
        ]);
    }
}
