<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
   public function index(){
    //QueryBuilder
    $Teachers = DB::table('Teachers')->get();
    
        
    return view('teacher',['teachers'=>$Teachers]);
   } //
}
