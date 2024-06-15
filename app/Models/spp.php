<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    use HasFactory;
    protected $table = 'spps';
    protected $fillable = ['keterangan','tahun','nominal'];
    
    public function Spp()
    {
        return $this->hasMany(Spp::class, 'id_spp','id');
    }
}
