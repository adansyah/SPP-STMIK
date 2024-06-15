@extends('layouts.master')
@section('title','Data Spp')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kelola Data Spp</h4>
                        <a href="spp/tambah" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-stripped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">ID</th>
                                    <th style="text-align: center;">Tahun</th>
                                    <th style="text-align: center;">Nominal</th>
                                    <th style="text-align: center;">Keterangan</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($spp as $s )
                                <tr>
                                    <td style="text-align: center;">{{ $loop->index+1 }}</td>
                                    <td style="text-align: center;">{{ $s-> tahun }}</td>
                                    <td style="text-align: center;">{{ $s-> nominal }}</td>
                                    <td style="text-align: center;">{{ $s-> keterangan }}</td>
                                    <td>
                                        <center>
                                        <a href="/spp/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/spp/{{$s->id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Data Akan Di Hapus?')">Hapus</a>
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