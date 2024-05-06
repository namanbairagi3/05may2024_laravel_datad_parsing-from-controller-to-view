<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class Child extends Parent {   }
class AnilController extends Controller
{
    //1.Property/Data

    //2.Constructor

    //3.method
    public function show(){
        $data = ['fullname'=>'ANIL DOLLOR']; //Local variable


        //Every function return somthing
        return view('anilViews.myview',$data);
    }
    public function edit(){

        //Every function return somthing
        return view('anil');
    }
}
