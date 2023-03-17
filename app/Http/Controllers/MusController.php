<?php

namespace App\Http\Controllers;

use App\Models\mus;
use Illuminate\Http\Request;

class MusController extends Controller
{
    public function index()
    {
        $mus = Mus::all();
        return view('mus', compact(['mus']));
    }
    public function create()
    {
        $mus = mus::all();
    }
    public function store(Request $request)
    {
        mus::create($request->except(['_token', 'submit']));
        return redirect('musrenbang');
    }
    public function edit($id)
    {
        $mus = Mus::find($id);
        return view('warga.editmus', compact(['mus']));
    }
    public function update($id, Request $request)
    {
        $mus = Mus::find($id);
        $mus->update($request->except(['_token', 'submit']));
        return redirect('/mus');
    }
    public function destroy($id)
    {
        $mus = Mus::find($id);
        $mus->delete();
        return redirect('/mus');
    }
}
