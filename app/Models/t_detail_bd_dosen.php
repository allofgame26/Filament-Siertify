<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_detail_bd_dosen extends Model
{
    use HasFactory;

    protected $table = 't_detail_bd_dosen';

    protected $guarded = [];

    protected $fillable = [
        'id_user',
        'id_bd',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function bidang_minat(){
        return $this->belongsTo(m_bidang_minat::class,'id_bd','id');
    }
}
