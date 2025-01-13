<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_detail_sertifikasi extends Model
{
    use HasFactory;

    protected $table = 't_detail_sertifikasi';

    protected $guarded = [];

    protected $fillable = [
        'id_sertifikasi',
        'id_periode',
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi',
        'quota_peserta',
        'biaya',
        'no_sertifikasi',
        'kadaluarsa',
        'status_disetujui',
        'input_by',
    ];

    public function sertifikasi(){
        return $this->belongsTo(m_sertifikasi::class, 'id_sertifikasi', 'id');
    }

    public function periode(){
        return $this->belongsTo(m_periode::class,'id_periode','id');
    }

    public function peserta(){
        return $this->hasMany(t_peserta_sertifikasi::class,'id_detail_sertifikasi','id');
    }
}
