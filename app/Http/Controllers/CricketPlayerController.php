<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CricketPlayer;

class CricketPlayerController extends Controller
{
    //1.Properties

    //2.Controllers

    //3.Methods
    public function index(){
        $players=CricketPlayer::all();
        //Every function returns something
        return view('cricketplayer',compact('players'));
    }
}
