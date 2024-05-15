<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mobile;
class MobileSeeder extends Seeder
{   //1. properties

    //2. constructor

    //3. methods

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Mobile::insert([
            ['brand_name' => 'Redmi',],
            ['brand_name' => 'mi',],
       ]); //
    }
}
