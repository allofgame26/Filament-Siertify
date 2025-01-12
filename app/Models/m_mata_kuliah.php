<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_mata_kuliah extends Model
{
    use HasFactory;

    protected $table = 'm_mata_kuliah';

    protected $fillable = [
        "nama_mk",
        "kode_mk",
        "deskripsi",
    ];

    protected $guarded = [];
}
