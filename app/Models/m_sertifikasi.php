<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class m_sertifikasi extends Model
{
    use HasFactory;

    protected $table = 'm_sertifikasi';

    protected $guarded = [];

    protected $fillable = [
        'nama_sertifikasi',
        'id_vendor_sertifikasi',
        'id_jenis_pelatihan_sertifikasi',
        'status',
    ];

    public function jenis_sertifikasi_pelatihan(){
        return $this->belongsTo(m_jenis_sertifikasi_pelatihan::class, 'id_jenis_pelatihan_sertifikasi','id');
    }

    public function vendor(){
        return $this->belongsTo(m_vendor_sertifikasi::class, 'id_vendor_sertifikasi','id');
    }

    public function detail_sertifikasi(){
        return $this->hasMany(t_detail_sertifikasi::class,'id_sertifikasi','id');
    }

    public function tagging_bd(){
        return $this->hasMany(t_tagging_bd_sertifikasi::class,'id_sertifikasi','id');
    }

    public function tagging_mk(){
        return $this->hasMany(t_tagging_mk_sertifikasi::class,'id_sertifikasi','id');
    }
}
