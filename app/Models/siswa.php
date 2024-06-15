<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = ['nis','nama','id_kelas','alamat','no_telp'];
    protected $primaryKey = 'nis';

    public function Kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas','id');
    }

    public function Pembayaran()
    {
        return $this->hasMany(Siswa::class, 'nis','nis');
    }
}
