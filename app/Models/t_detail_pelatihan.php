<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_detail_pelatihan extends Model
{
    use HasFactory;

    protected $table = 't_detail_pelatihan';

    protected $guarded = [];

    protected $fillable = [
        'id_pelatihan',
        'id_periode',
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi',
        'quota_peserta',
        'biaya',
        'no_pelatihan',
        'status_disetujui',
        'input_by',
    ];

    public function pelatihan(){
        return $this->belongsTo(m_pelatihan::class, 'id_pelatihan', 'id');
    }

    public function periode(){
        return $this->belongsTo(m_periode::class,'id_periode','id');
    }

    public function peserta(){
        return $this->hasMany(t_peserta_pelatihan::class,'id_detail_pelatihan','id');
    }
}
