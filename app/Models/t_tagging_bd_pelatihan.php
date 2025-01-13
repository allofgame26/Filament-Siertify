<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_tagging_bd_pelatihan extends Model
{
    use HasFactory;

    protected $table = 't_tagging_bd_pelatihan';

    protected $guarded = [];

    protected $fillable = [
        'id_pelatihan',
        'id_bd'
    ];

    public function pelatihan(){
        return $this->belongsTo(m_pelatihan::class,'id_pelatihan','id');
    }

    public function bidang_minat(){
        return $this->belongsTo(m_bidang_minat::class,'id_bd','id');
    }
}
