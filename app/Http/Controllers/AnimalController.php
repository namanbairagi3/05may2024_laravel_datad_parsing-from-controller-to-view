<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Animal;

class AnimalController extends Controller
{
    //1.property
    //2.constructor
    //3.method
    public function index(){
        $animals=Animal::all();
        return view('animal',compact('animals'));
    }
}
