@extends('layouts.master')
@section('title','Tambah Data Siswa')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah Data Siswa</h4>
                        
                    </div>
                    <div class="card-body">
                        <form action="/siswa/simpan" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="">NIS</label>
                                <input type="text" class="form-control" name="nis" id="" placeholder="Masukan NIS" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" id="" placeholder="Masukan Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select class ="form-control" name="id_kelas" id="">
                                    @foreach ($kelas as $item)
                                    <option value="{{$item->id}}">{{$item->nama_kelas}}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" class="form-control" name="id_kelas" id="" placeholder="Masukan Id Kelas" required> --}}
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="" placeholder="Masukan Alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" class="form-control" name="no_telp" id="" placeholder="Masukan No Telepon" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/siswa" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
        </div>
    </section>
</div>