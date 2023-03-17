<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;


class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        return view('warga.warga', compact(['warga']));
    }
    public function create()
    {
        return view('warga.add');
    }
    public function store(Request $request)
    {
        Warga::create($request->except(['_token', 'submit']));
        return redirect('data');
    }
    public function edit($id)
    {
        $warga = Warga::find($id);
        return view('warga.editwarga', compact(['warga']));
    }
    public function update($id, Request $request)
    {
        $warga = Warga::find($id);
        $warga->update($request->except(['_token', 'submit']));
        return redirect('/warga');
    }
    public function destroy($id)
    {
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/warga');
    }
}
