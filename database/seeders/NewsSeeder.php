<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        // Insert news using QueryBuilder DB
        DB::table('news')->insert([
            [
                'title' => 'title1',
                'description' => 'description1',
                'image_url' => 'https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'title' => 'title2',
                'description' => 'description2',
                'image_url' => 'https://wallpapers.com/images/featured/nature-2ygv7ssy2k0lxlzu.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ]
        ]);
    }
}
