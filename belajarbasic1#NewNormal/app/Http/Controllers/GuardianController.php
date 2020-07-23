<?php

namespace App\Http\Controllers;

use App\Model\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::all();

        return view('guardian.index', compact('guardians'));
    }
    public function create()
    {
        return view('guardian.create');
    }
    public function store(Request $request)
    {
        $guard             = new Guardian();
        $guard->name       = $request->name;
        $guard->nik        = $request->nik;
        $guard->gender     = $request->gender;
        $guard->phone      = $request->phone;
        $guard->birth_date = $request->birth_date;
        $guard->address    = $request->address;
        $guard->is_parent  = $request->is_parent;
        $guard->save();
        return redirect("guardians");
    }
}
