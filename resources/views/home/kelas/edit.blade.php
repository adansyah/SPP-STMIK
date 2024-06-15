@extends('layouts.master')
@section('title','Edit Data Kelas')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Edit Data Kelas</h4>
                        
                    </div>
                    <div class="card-body">
                        <form action="/kelas/{{ $kelas->id }}/update" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="">Nama Kelas</label>
                                <input type="text" class="form-control" name="nama_kelas" id="" value="{{ $kelas->nama_kelas }}" placeholder="Masukan Nama Kelas" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kompetensi Keahlian</label>
                                <input type="text" class="form-control" name="kompetensi_keahlian" id="" value="{{ $kelas->kompetensi_keahlian }}" placeholder="Masukan Kompetensi Keahlian" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/kelas" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
        </div>
    </section>
</div>