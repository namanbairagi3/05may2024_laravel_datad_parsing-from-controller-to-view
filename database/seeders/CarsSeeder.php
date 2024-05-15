<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */ 
    public function run(): void
    {
        DB::table('cars_tables')->insert(
                        [
                            [
                                'brand' => 'Tata',
                                'created_at' =>DB::raw('CURRENT_TIMESTAMP'),
                                'updated_at' =>DB::raw('CURRENT_TIMESTAMP')
                            ],
                            [
                                'brand' => 'Honda',
                                'created_at' =>DB::raw('CURRENT_TIMESTAMP'),
                                'updated_at' =>DB::raw('CURRENT_TIMESTAMP')
                            ]
                        ]
        );

        //
    }
}
