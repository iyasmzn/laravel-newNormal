<?php

namespace App\Http\Controllers;

use App\Model\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('player.index', compact('players'));
    }
    public function create()
    {
        return view('player.create');
    }
    public function store(Request $request)
    {
        $player         = new Player();
        $player->name   = $request->name;
        $player->gender = $request->gender;
        $player->age    = $request->age;
        $player->height = $request->height;
        $player->club   = $request->club;
        $player->save();
        return redirect('players');
    }
}
