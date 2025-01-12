<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_vendor_sertifikasi extends Model
{
    use HasFactory;

    protected $table = 'm_vendor_sertifikasi';

    protected $fillable = [
        "nama_vendor_sertifikasi",
        "alamat_vendor_sertifikasi",
        "kota_vendor_sertifikasi",
        "no_telp_vendor_sertifikasi",
        "web_vendor_sertifikasi",
    ];

    protected $guarded = [];

    public function sertifikasi(){
        return $this->hasMany(m_sertifikasi::class, 'id_vendor_sertifikasi','id');
    }
}
