<?php

namespace App\Http\Controllers;

use App\Models\surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat::all();
        return view('surat', compact(['surat']));
        //dd($request->all);
    }
    public function create()
    {
        $surat = Surat::all();
    }
    public function store(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        surat::create($request->except(['_token', 'submit']));
        return redirect('suket');
    }
}
