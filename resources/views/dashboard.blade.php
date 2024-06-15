@extends('layouts.master')
@section('title','dashboard')
@section('content')
<link rel="stylesheet" href="style.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12"><center>
            <h1 style="font-family: bold arial, sans-serif">Aplikasi Pembayaran SPP </h1>
            <h1 style="font-family: bold arial, sans-serif;">STMIK Mardira Indonesia  </h1></center>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$jumlah_siswa}}</h3>

                <p>Jumlah Mahasiswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$jumlah_kelas}}<sup style="font-size: 20px"></sup></h3>

                <p>Jumlah Kelas</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/kelas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Rp. {{number_format($total_price,2,',',',') }}</h3>

                <p>Total Transaksi(Bulan Ini)</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/pembayaran" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
        </div>
    </section>


    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Tabel Transaksi Mahasiswa</h3>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th style="text-align: center;">NO</th>
                        <th style="text-align: center;">NIM</th>
                        <th style="text-align: center;">SPP</th>
                        <th style="text-align: center;">Tanggal Bayar</th>
                        <th style="text-align: center;">Jumlah Bayar</th>
                        <th style="text-align: center;">Nama Petugas</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayaran as $p )
                    <tr>
                        <td style="text-align: center;">{{ $loop-> index+1 }}</td>
                        <td style="text-align: center;">{{ $p->siswa->nis }} - {{ $p->siswa->nama }}</td>
                        <td style="text-align: center;">{{ $p->spp->keterangan }}</td>
                        <td style="text-align: center;">{{ $p-> tgl_bayar }}</td>
                        <td style="text-align: center;">Rp. {{number_format($p ->jumlah_bayar,2,',',',') }}</td>
                        <td style="text-align: center;">{{ $p->user->id }} - {{ $p->user->name }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </section>

  </div>
  @endsection