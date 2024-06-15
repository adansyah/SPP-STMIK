@extends('layouts.master')
@section('title', 'Data User')
@section('content')
    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Kelola Data Petugas</h4>
                                <a href="user/tambah" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-stripped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">ID</th>
                                            <th style="text-align: center;">Nama Petugas</th>
                                            <th style="text-align: center;">Username</th>
                                            <th style="text-align: center;">Tanggal Daftar</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $u)
                                            <tr>
                                                <td style="text-align: center;">{{ $loop->index + 1 }}</td>
                                                <td style="text-align: center;">{{ $u->name }}</td>
                                                <td style="text-align: center;">{{ $u->username }}</td>
                                                <td style="text-align: center;">{{ $u->created_at->format('d F Y') }}</td>
                                                <td>
                                                    <center>
                                                        <a href="/user/{{ $u->id }}/edit"
                                                            class="btn btn-warning">Edit</a>
                                                        <a href="/user/{{ $u->id }}/hapus" class="btn btn-danger"
                                                            onclick="return confirm('Yakin Hapus Data ini?')">Hapus</a>
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
