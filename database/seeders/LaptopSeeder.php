<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Class::method
        DB::table('laptops')->insert([ // Array of Associative array
            ['brand'=>'DELL'],
            ['brand'=>'LENOVA'],
           
        ]);
//
    }
}
