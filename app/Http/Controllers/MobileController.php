<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mobile;

class MobileController extends Controller
{
    public function index(){ //index is to list the data on the viewFile
        //Eleqouent ORM
        $mobiles=Mobile::all();
        return view('mobile',compact('mobiles')); //
}
}