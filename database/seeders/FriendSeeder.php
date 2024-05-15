<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendSeeder extends Seeder
{   
    
    //Property

    //Constructor

    //Method
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('friends')->insert([
        'name' => 'yash',
        'sname' => 'mali',
        'phone' => '123454',
        
       ]); //
    }
}
