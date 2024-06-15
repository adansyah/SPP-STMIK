@extends('layouts.master')
@section('title', 'Data Siswa')
@section('content')
    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Kelola Data Siswa</h4>
                                <a href="siswa/tambah" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-stripped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">NIM</th>
                                            <th style="text-align: center;">Nama</th>
                                            <th style="text-align: center;">Kelas</th>
                                            <th style="text-align: center;">Alamat</th>
                                            <th style="text-align: center;">No Telepon</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswa as $s)
                                            <tr>
                                                <td style="text-align: center;">{{ $s->nis }}</td>
                                                <td style="text-align: center;">{{ $s->nama }}</td>
                                                <td style="text-align: center;">{{ $s->Kelas->nama_kelas }}</td>
                                                <td style="text-align: center;">{{ $s->alamat }}</td>
                                                <td style="text-align: center;">{{ $s->no_telp }}</td>
                                                <td>
                                                    <center>
                                                        <a href="/siswa/{{ $s->nis }}/edit"
                                                            class="btn btn-warning">Edit</a>
                                                        <a href="/siswa/{{ $s->nis }}/hapus" class="btn btn-danger"
                                                            onclick="return confirm('Yakin Data Akan Di Hapus?')">Hapus</a>
                                                    </center>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
