@extends('layouts.master')
@section('title','Edit Data User')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Edit Data Petugas</h4>
                        
                    </div>
                    <div class="card-body">
                        <form action="/user/{{ $user->id }}/update" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Petugas</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Masukan Nama Petugas" required>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Masukan Username Untuk Akun" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" value="{{ $user->password }}" placeholder="Masukan Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/user" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
        </div>
    </section>
</div>