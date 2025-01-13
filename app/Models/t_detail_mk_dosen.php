<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_detail_mk_dosen extends Model
{
    use HasFactory;

    protected $table = 't_detail_mk_dosen';

    protected $guarded = [];

    protected $fillable = [
        'id_user',
        'id_mk',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function mata_kuliah(){
        return $this->belongsTo(m_mata_kuliah::class,'id_mk','id');
    }
}
