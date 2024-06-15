<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $fillable = ['nis','tgl_bayar','id_spp','alamat','jumlah_bayar','id_petugas'];
    

    public function Spp()
    {
        return $this->belongsTo(Spp::class, 'id_spp','id');
    }

    public function Siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis','nis');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'id_petugas','id');
    }
        
    
}
