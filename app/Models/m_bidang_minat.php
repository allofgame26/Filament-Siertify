<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_bidang_minat extends Model
{
    use HasFactory;

    protected $table = 'm_bidang_minat';

    protected $fillable = [
        "nama_bd",
        "kode_bd",
        "deskripsi",
    ];

    protected $guarded = [];
}
