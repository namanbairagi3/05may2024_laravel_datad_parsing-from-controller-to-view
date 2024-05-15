<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post; // Change this to 'Post' if your model is named 'Post'
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        //I want to create a post. Laravel offers 2 ways to perform this operation:
        //1. Using QueryBuilder
        //2. Using Eloquent ORM (Object Relational Mapper)
        
        // Include the current timestamp in each inserted record
        Post::insert([
            ['post_title' => 'title1', 'post_description' => 'description1', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['post_title' => 'title2', 'post_description' => 'description', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['post_title' => 'title3', 'post_description' => 'description3', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['post_title' => 'title34', 'post_description' => 'description4', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp], // Adjust this line accordingly
        ]);
    }
}
