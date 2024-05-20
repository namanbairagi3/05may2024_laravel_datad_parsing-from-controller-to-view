<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    // Add the fillable property to allow mass assignment
    protected $fillable = ['post_title', 'post_description'];
}
