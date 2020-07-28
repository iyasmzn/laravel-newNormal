<?php

namespace App\Http\Controllers;

use App\Model\Club;
use App\Model\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new Player();
    }
    public function index()
    {
        $players = $this->model->all();
        return view('player.index', compact('players'));
    }
    public function create()
    {
        $clubs = Club::all();
        return view('player.create', compact('clubs'));
    }
    public function store(Request $request)
    {
        $this->model->create($request->all());
        return redirect('players');
    }
    public function edit($id)
    {
        $this->model->find($id);
        return view('player.edit', compact('player'));
    }
    public function update(Request $request, $id)
    {
        $this->model->find($id)->update($request->all());
        return redirect('/players');
    }
    public function delete($id)
    {
        $this->model->find($id)->delete();
        return redirect('players');
    }
}
