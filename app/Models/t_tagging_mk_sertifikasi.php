<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_tagging_mk_sertifikasi extends Model
{
    use HasFactory;

    protected $table = 't_tagging_mk_sertifikasi';

    protected $guarded = [];

    protected $fillable = [
        'id_sertifikasi',
        'id_mk'
    ];

    public function sertifikasi(){
        return $this->belongsTo(m_sertifikasi::class,'id_sertifikasi','id');
    }

    public function mata_kuliah(){
        return $this->belongsTo(m_mata_kuliah::class,'id_mk','id');
    }
}
