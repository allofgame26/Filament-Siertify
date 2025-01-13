<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'users';
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'id_identitas',
        'id_jenis_pengguna',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function peserta_sertifikasi(){
        return $this->hasMany(t_peserta_sertifikasi::class, 'id_user', 'id');
    }

    public function peserta_pelatihan(){
        return $this->hasMany(t_peserta_pelatihan::class, 'id_user', 'id');
    }

    public function mk_dosen(){
        return $this->hasMany(t_detail_mk_dosen::class, 'id_user','id');
    }

    public function bd_dosen(){
        return $this->hasMany(t_detail_bd_dosen::class, 'id_user','id');
    }
}
