<?php

namespace App\Http\Controllers;
use App\Models\Kelas;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $kelas = Kelas::all();
        return view('home.kelas.index',compact(['kelas']));
    }

    public function create(){
        return view('home.kelas.tambah');
    }

    public function store(Request $request){
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            $request->except(['_token']),
        ]);
        return redirect('/kelas');
    }

    public function destroy($id){
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/kelas');
    }

    public function show($id){
        $kelas = Kelas::find($id);
        return view('home.kelas.edit',compact(['kelas']));
    }

    public function update($id, Request $request){
        $kelas = Kelas::find($id);
        $kelas->update([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            $request->except(['_token']),
        ]);
        return redirect('/kelas');
    }
}
