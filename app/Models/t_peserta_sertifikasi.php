<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_peserta_sertifikasi extends Model
{
    use HasFactory;

    protected $table = 't_peserta_sertifikasi';

    protected $guarded = [];

    protected $fillable = [
        'id_user',
        'id_detail_sertifikasi'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function detail_sertifikasi(){
        return $this->belongsTo(t_detail_sertifikasi::class,'id_detail_sertifikasi','id');
    }
}
