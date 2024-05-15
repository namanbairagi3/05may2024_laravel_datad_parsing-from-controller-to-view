<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CricketPlayer;
use Carbon\Carbon;

class CricketPlayerSeeder extends Seeder
{
    public function run()
    {
        $currentTimestamp = Carbon::now();
        // I want to do the create operation
        //Class::method()
        //CricketPlayer::create(); // If you want to insert a single record
        CricketPlayer::insert([ //Array of Associative array
            ['name'=>'MS Dhoni', 'country'=>'India', 'age'=>'1', 'created_at'=>$currentTimestamp, 'updated_at'=>$currentTimestamp],
            ['name'=>'Rohit Sharma','country'=>'India', 'age'=>'1', 'created_at'=>$currentTimestamp, 'updated_at'=>$currentTimestamp],
            ['name'=>'Shubhman Gill','country'=>'India', 'age'=>'1', 'created_at'=>$currentTimestamp, 'updated_at'=>$currentTimestamp]
          ]); // If you want to insert a mulitple record
    }
}
