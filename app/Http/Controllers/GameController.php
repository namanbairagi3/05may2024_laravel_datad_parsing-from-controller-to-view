<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game; // Assuming your model is named 'Game'

class GameController extends Controller
{
    public function index()
    {
        // Eloquent ORM
        $games = Game::all();

        return view('game', compact('games'));
    }
}
