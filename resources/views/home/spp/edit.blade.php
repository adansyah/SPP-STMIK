@extends('layouts.master')
@section('title','Edit Data Spp')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Edit Data Spp</h4>
                        
                    </div>
                    <div class="card-body">
                        <form action="/spp/{{$spp->id}}/update" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="">Tahun</label>
                                <input type="text" class="form-control" name="tahun" id="" value="{{$spp->tahun}}" placeholder="Masukan Tahun" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nominal</label>
                                <input type="text" class="form-control" name="nominal" id="" value="{{$spp->nominal}}" placeholder="Masukan Nominal" required>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="" value="{{$spp->keterangan}}" placeholder="Masukan Keterangan" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/spp" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
        </div>
    </section>
</div>