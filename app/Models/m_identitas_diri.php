<?php

namespace App\Models;

use App\Models\User as ModelsUser;
use Database\Seeders\user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class m_identitas_diri extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nip',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telp',
    ];

    protected $guarded = [];

    protected $table = 'm_identitas_diri';

    public function user(){
        return $this->hasMany(ModelsUser::class,'id_identitas','id');
    }
}
