<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['name' => 'New York', 'pin_code' => '10001'],
            ['name' => 'Los Angeles', 'pin_code' => '90001'],
            ['name' => 'Chicago', 'pin_code' => '60601'],
            ['name' => 'Houston', 'pin_code' => '77001'],
            ['name' => 'Phoenix', 'pin_code' => '85001'],
        ]);
    }
}
