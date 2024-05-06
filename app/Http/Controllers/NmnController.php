<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NmnController extends Controller
{
    //
    public function show(){
        
        $data = [
            'name' => 'Nmn'
        ];

        return view('nmn', $data);
    }

}
