<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas','kompetensi_keahlian'];
    public function Siswa()
    {
        return $this->hasMany(Kelas::class, 'id_kelas','id');
    }   
}
