<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Model\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('player.index', compact('players'));
    }
}
