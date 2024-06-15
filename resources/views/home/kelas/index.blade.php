@extends('layouts.master')
@section('title', 'Data Kelas')
@section('content')
    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Kelola Data Kelas</h4>
                                <a href="kelas/tambah" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-stripped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">ID</th>
                                            <th style="text-align: center;">Nama Kelas</th>
                                            <th style="text-align: center;">Kompetensi Keahlian</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas as $k)
                                            <tr>
                                                <td style="text-align: center;">{{ $loop->index + 1 }}</td>
                                                <td style="text-align: center;">{{ $k->nama_kelas }}</td>
                                                <td style="text-align: center;">{{ $k->kompetensi_keahlian }}</td>
                                                <td>
                                                    <center>
                                                        <a href="/kelas/{{ $k->id }}/edit"
                                                            class="btn btn-warning">Edit</a>
                                                        <a href="/kelas/{{ $k->id }}/hapus" class="btn btn-danger"
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
