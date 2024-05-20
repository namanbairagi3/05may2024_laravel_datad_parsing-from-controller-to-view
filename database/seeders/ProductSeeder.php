<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        DB::table('products')->insert([
            [
                'bike_name' => 'suzuki hayabusa',
                'bike_colour' => 'black',
                'bike_cc' => '1340',
                'bike_price' => '1500000',
                'bike_image_url' => 'https://cdn.shopify.com/s/files/1/0076/8301/4754/files/2021-Suzuki-Hayabusa-Side-View_2048x2048.jpg?v=1622948059',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'bike_name' => 'kawasaki h2',
                'bike_colour' => 'silver',
                'bike_cc' => '998',
                'bike_price' => '3600000',
                'bike_image_url' => 'https://bd.gaadicdn.com/processedimages/kawasaki/kawasaki-ninja-h2/494X300/m_ninja-h2_11540288231.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ]
        ]);
    }
}
