@extends('layouts.master')
@section('title','Edit Data Pembayaran')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Edit Data Pembayaran</h4>
                        
                    </div>
                    <div class="card-body">
                        <form action="/pembayaran/{{$pembayaran->id}}/update" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">NIS</label>
                                <select class ="form-control" name="nis" id="">
                                    @foreach ($siswa as $s)
                                    <option value="{{$s->nis}}">{{$s->nis}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Bayar</label>
                                <input type="date" class="form-control" name="tgl_bayar" id="" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nominal</label>
                                <select class ="form-control" name="id_spp" id="">
                                    @foreach ($spp as $s)
                                    <option value="{{$s->id}}">{{$s->nominal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Bayar</label>
                                <input type="text" class="form-control" name="jumlah_bayar" id="" placeholder="Masukan Jumlah Bayar" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Nama Petugas</label>
                                <select class ="form-control" name="id_petugas" id="">
                                    @foreach ($user as $u)
                                    <option value="{{$u->id}}">{{$u->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/pembayaran" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
        </div>
    </section>
</div>