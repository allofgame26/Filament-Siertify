<?php

namespace App\Models;

use App\Models\User as ModelsUser;
use Database\Seeders\user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_jenis_pengguna extends Model
{
    use HasFactory;

    protected $table = "m_jenis_pengguna";

    protected $guarded = [];

    protected $fillable = [
        "nama_jenis_pengguna",
        "kode_jenis_pengguna",
    ];

    public function user(){
        return $this->hasMany(ModelsUser::class, 'id_jenis_pengguna','id');
    }
}
