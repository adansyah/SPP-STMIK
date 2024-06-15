<?php

namespace App\Http\Controllers;
use App\Models\Pembayaran;
use App\Models\siswa;
use App\Models\spp;
use App\Models\User;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){
        $pembayaran = Pembayaran::all();
        return view('home.pembayaran.index',compact(['pembayaran']));
    }

    public function create(){
        $spp=spp::all();
        $siswa=siswa::all();
        $user=User::all();
        return view('home.pembayaran.tambah',compact(['spp','siswa','user']));
    }

    public function cetak(){
        $pembayaran = Pembayaran::all();
        return view('home.pembayaran.cetak',compact('pembayaran'));
    }

    public function struk($id){
        $pembayaran = Pembayaran::find($id);
        return view('home.pembayaran.struk',compact('pembayaran'));
    }

    public function store(Request $request){
        Pembayaran::create([
            'nis' => $request->nis,
            'tgl_bayar' => $request->tgl_bayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar,
            // 'keterangan' => $request->keterangan,
            'id_petugas' => $request->id_petugas,
            $request->except(['_token']),
        ]);
        return redirect('/pembayaran');
    }

    public function destroy($id){
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return redirect('/pembayaran');
    }

    public function show($id){
        $pembayaran = Pembayaran::find($id);
        $spp=spp::all();
        $siswa=siswa::all();
        $user=User::all();
        return view('home.pembayaran.edit',compact(['pembayaran','spp','siswa','user']));
    }

    public function update($id, Request $request){
        $pembayaran = Pembayaran::find($id);
        $pembayaran->update([
            'nis' => $request->nis,
            'tgl_bayar' => $request->tgl_bayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar,
            // 'keterangan' => $request->keterangan,
            'id_petugas' => $request->id_petugas,
            $request->except(['_token']),
        ]);
        return redirect('/pembayaran');
    }
}
