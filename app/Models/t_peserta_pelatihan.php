<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_peserta_pelatihan extends Model
{
    use HasFactory;

    protected $table = 't_peserta_pelatihan';

    protected $guarded = [];

    protected $fillable = [
        'id_user',
        'id_detail_pelatihan'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function detail_pelatihan(){
        return $this->belongsTo(t_detail_pelatihan::class,'id_detail_pelatihan','id');
    }
}
