<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;
use carbon\carbon;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        //I want to do create operation
        //class methods
        //Animal::create();
        Animal::insert([
            ['name'=>'Dog', 'created_at'=>$currentTimestamp, 'updated_at'=>$currentTimestamp],
            ['name'=>'tiger', 'created_at'=>$currentTimestamp, 'updated_at'=>$currentTimestamp],
        ]);
    }
}
