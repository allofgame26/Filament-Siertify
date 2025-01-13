<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_tagging_mk_pelatihan extends Model
{
    use HasFactory;

    protected $table = 't_tagging_mk_pelatihan';

    protected $guarded = [];

    protected $fillable = [
        'id_pelatihan',
        'id_mk'
    ];

    public function pelatihan(){
        return $this->belongsTo(m_pelatihan::class,'id_pelatihan','id');
    }
        
    public function mata_kuliah(){
        return $this->belongsTo(m_mata_kuliah::class,'id_mk','id');
    }
}
