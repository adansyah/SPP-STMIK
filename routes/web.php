<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

//User
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/{id}/hapus', [UserController::class, 'destroy']);
Route::get('/user/{id}/edit', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);

//Kelas
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/tambah', [KelasController::class, 'create']);
Route::post('/kelas/simpan', [KelasController::class, 'store']);
Route::get('/kelas/{id}/hapus', [KelasController::class, 'destroy']);
Route::get('/kelas/{id}/edit', [KelasController::class, 'show']);
Route::post('/kelas/{id}/update', [KelasController::class, 'update']);

//Siswa
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/tambah', [SiswaController::class, 'create']);
Route::post('/siswa/simpan', [SiswaController::class, 'store']);
Route::get('/siswa/{id}/hapus', [SiswaController::class, 'destroy']);
Route::get('/siswa/{id}/edit', [SiswaController::class, 'show']);
Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);

//Spp
Route::get('/spp', [SppController::class, 'index']);
Route::get('/spp/tambah', [SppController::class, 'create']);
Route::post('/spp/simpan', [SppController::class, 'store']);
Route::get('/spp/{id}/hapus', [SppController::class, 'destroy']);
Route::get('/spp/{id}/edit', [SppController::class, 'show']);
Route::post('/spp/{id}/update', [SppController::class, 'update']);

//Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/tambah', [PembayaranController::class, 'create']);
Route::post('/pembayaran/simpan', [PembayaranController::class, 'store']);
Route::get('/pembayaran/{id}/hapus', [PembayaranController::class, 'destroy']);
Route::get('/pembayaran/{id}/edit', [PembayaranController::class, 'show']);
Route::post('/pembayaran/{id}/update', [PembayaranController::class, 'update']);
Route::get('/pembayaran/{id}/struk', [PembayaranController::class, 'struk']);
Route::get('/pembayaran/cetak', [PembayaranController::class, 'cetak']);

//Login
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['midlleware' => ['auth']], function () {
});

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
