<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_bidang_minat extends Model
{
    use HasFactory;

    protected $table = 'm_bidang_minat';

    protected $fillable = [
        "nama_bd",
        "kode_bd",
        "deskripsi",
    ];

    protected $guarded = [];

    public function tagging_pelatihan(){
        return $this->hasMany(t_tagging_bd_pelatihan::class,'id_bd','id');
    }

    public function tagging_sertifikasi(){
        return $this->hasMany(t_tagging_bd_sertifikasi::class,'id_bd','id');
    }

    public function tagging_dosen(){
        return $this->hasMany(t_detail_bd_dosen::class,'id_bd','id');
    }
}
