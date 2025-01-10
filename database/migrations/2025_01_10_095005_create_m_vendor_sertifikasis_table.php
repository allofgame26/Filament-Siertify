<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_vendor_sertifikasi', function (Blueprint $table) {
            $table->id(); 
            $table->string('nama_vendor_sertifikasi');
            $table->string('alamat_vendor_sertifikasi');
            $table->string('kota_vendor_sertifikasi');
            $table->string('no_telp_vendor_sertifikasi');
            $table->string('web_vendor_sertifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_vendor_sertifikasi');
    }
};
