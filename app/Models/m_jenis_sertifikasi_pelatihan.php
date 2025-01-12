<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_jenis_sertifikasi_pelatihan extends Model
{
    use HasFactory;

    protected $table = 'm_jenis_sertifikasi_pelatihan';

    protected $fillable = [
        'nama_jenis_sertifikasi_pelatihan',
        'deskripsi_pendek'
    ];

    protected $guarded = [];

    public function sertifikasi(){
        return $this->hasMany(m_sertifikasi::class, 'id_jenis_sertifikasi_pelatihan','id');

    }
    public function pelatihan(){
        return $this->hasMany(m_pelatihan::class, 'id_jenis_sertifikasi_pelatihan','id');
    }
}
