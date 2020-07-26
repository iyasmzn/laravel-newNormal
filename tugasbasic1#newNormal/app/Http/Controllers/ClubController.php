<?php

namespace App\Http\Controllers;

use App\Model\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function __construct()
    {
        $this->model = new Club();
    }
    public function index()
    {
        $clubs = $this->model->all();
        return view('club.index', compact('clubs'));
    }
    public function create()
    {
        return view('club.create');
    }
    public function store(Request $request)
    {
        $this->model->create($request->all());
        return redirect('clubs');
    }
    public function edit($id)
    {
        $this->model->find($id);
        return view('club.edit', compact('club'));
    }
    public function update(Request $request, $id)
    {
        $this->model->find($id)->update($request->all());
        return redirect('/clubs');
    }
    public function delete($id)
    {
        $this->model->find($id)->delete();
        return redirect('clubs');
    }
}
