<?php

namespace App\Http\Controllers;
use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index(){
        $spp = Spp::all();
        return view('home.spp.index',compact(['spp']));
    }

    public function create(){
        return view('home.spp.tambah');
    }

    public function store(Request $request){
        Spp::create([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
            'keterangan' => $request->keterangan,
            $request->except(['_token']),
        ]);
        return redirect('/spp');
    }

    public function destroy($id){
        $spp = Spp::find($id);
        $spp->delete();
        return redirect('/spp');
    }

    public function show($id){
        $spp = Spp::find($id);
        return view('home.spp.edit',compact(['spp']));
    }

    public function update($id, Request $request){
        $spp = Spp::find($id);
        $spp->update([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
            'keterangan' => $request->keterangan,
            $request->except(['_token']),
        ]);
        return redirect('/spp');
    }
}
