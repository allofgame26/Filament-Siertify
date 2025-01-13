<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_periode extends Model
{
    use HasFactory;

    protected $table = 'm_periode';

    protected $fillable = [
        "nama_periode",
        "tanggal_mulai",
        "tanggal_selesai",
        "deskripsi_periode",
    ];

    protected $guarded = [];

    public function detail_sertifikasi(){
        return $this->hasMany(t_detail_sertifikasi::class,'id_periode','id');
    
    }
    public function detail_pelatihan(){
        return $this->hasMany(t_detail_pelatihan::class,'id_periode','id');
    }
    
}
