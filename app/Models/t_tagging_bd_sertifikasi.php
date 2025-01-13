<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_tagging_bd_sertifikasi extends Model
{
    use HasFactory;

    protected $table = 't_tagging_bd_sertifikasi';

    protected $guarded = [];

    protected $fillable = [
        'id_sertifikasi',
        'id_bd'
    ];

    public function sertifikasi(){
        return $this->belongsTo(m_sertifikasi::class,'id_sertifikasi','id');
    }

    public function bidang_minat(){
        return $this->belongsTo(m_bidang_minat::class,'id_bd','id');
    }
}
