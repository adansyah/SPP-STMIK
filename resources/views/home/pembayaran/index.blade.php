@extends('layouts.master')
@section('title', 'Data Pembayaran')
@section('content')
    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Kelola Data Pembayaran</h4>
                                <a href="pembayaran/tambah" class="btn btn-primary">Tambah Data</a>
                                <a href="pembayaran/cetak" target="_blank" class="btn btn-success"><span
                                        class="fa fa-print"></span>Keseluruhan</a>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-stripped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">ID</th>
                                            <th style="text-align: center;">NIM</th>
                                            <th style="text-align: center;">Tanggal Bayar</th>
                                            <th style="text-align: center;">Nominal</th>
                                            <th style="text-align: center;">Jumlah Bayar</th>
                                            <th style="text-align: center;">Keterangan</th>
                                            <th style="text-align: center;">Nama Petugas</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pembayaran as $p)
                                            <tr>
                                                <td style="text-align: center;">{{ $loop->index + 1 }}</td>
                                                <td style="text-align: center;">{{ $p->siswa->nis }}</td>
                                                <td style="text-align: center;">{{ $p->tgl_bayar }}</td>
                                                <td style="text-align: center;">{{ $p->spp->nominal }}</td>
                                                <td style="text-align: center;">{{ $p->jumlah_bayar }}</td>
                                                <td style="text-align: center;">{{ $p->spp->keterangan }}</td>
                                                <td style="text-align: center;">{{ $p->user->name }}</td>
                                                <td>
                                                    <center>
                                                        <a href="/pembayaran/{{ $p->id }}/edit"
                                                            class="btn btn-warning"><i class="fas fa-cog"></i></a>
                                                        <a href="/pembayaran/{{ $p->id }}/hapus"
                                                            class="btn btn-danger"
                                                            onclick="return confirm('Yakin Data Akan Di Hapus?')"><i
                                                                class="fas fa-trash"></i></a>
                                                        <a href="pembayaran/{{ $p->id }}/struk" target="_blank"
                                                            class="btn btn-success"><span class="fa fa-print"></span></a>
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
