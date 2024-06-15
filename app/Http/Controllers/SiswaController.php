<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('home.siswa.index', compact(['siswa']));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('home.siswa.tambah', compact(['kelas']));
    }

    public function store(Request $request)
    {
        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token']),
        ]);
        return redirect('/siswa');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }

    public function show($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('home.siswa.edit', compact(['siswa']));
    }

    public function update($id, Request $request)
    {
        $siswa = Siswa::find($id);
        $siswa->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token']),
        ]);
        return redirect('/siswa');
    }
}
