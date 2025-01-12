<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_pelatihan extends Model
{
    use HasFactory;

    protected $table = 'm_pelatihan';

    protected $guarded = [];

    protected $fillable = [
        'nama_pelatihan',
        'id_vendor_pelatihan',
        'id_jenis_pelatihan_sertifikasi',
        'status',
    ];

    public function jenis_sertifikasi_pelatihan(){
        return $this->belongsTo(m_jenis_sertifikasi_pelatihan::class, 'id_jenis_pelatihan_sertifikasi','id');
    }

    public function vendor(){
        return $this->belongsTo(m_vendor_pelatihan::class, 'id_vendor_pelatihan','id');
    }
}
