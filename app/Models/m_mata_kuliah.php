<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_mata_kuliah extends Model
{
    use HasFactory;

    protected $table = 'm_mata_kuliah';

    protected $fillable = [
        "nama_mk",
        "kode_mk",
        "deskripsi",
    ];

    protected $guarded = [];

    public function tagging_pelatihan(){
        return $this->hasMany(t_tagging_mk_pelatihan::class,'id_mk','id');
    }

    public function tagging_sertifikasi(){
        return $this->hasMany(t_tagging_mk_sertifikasi::class,'id_mk','id');
    }

    public function tagging_dosen(){
        return $this->hasMany(t_detail_mk_dosen::class,'id_mk','id');
    }
}
