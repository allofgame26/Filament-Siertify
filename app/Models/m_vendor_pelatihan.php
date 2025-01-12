<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_vendor_pelatihan extends Model
{
    use HasFactory;

    protected $table = 'm_vendor_pelatihan';

    protected $fillable = [
        "nama_vendor_pelatihan",
        "alamat_vendor_pelatihan",
        "kota_vendor_pelatihan",
        "no_telp_vendor_pelatihan",
        "web_vendor_pelatihan",
    ];

    protected $guarded = [];

    public function pelatihan(){
        return $this->hasMany(m_pelatihan::class, 'id_vendor_pelatihan','id');
    }
}
