<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_periode extends Model
{
    use HasFactory;

    protected $table = 'm_periode';

    protected $fillable = [
        "nama_periode",
        "tanggal_mulai",
        "tanggal_selesai",
        "deskripsi_periode",
    ];

    protected $guarded = [];
    
}
