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
        Schema::create('t_detail_sertifikasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sertifikasi')->constrained('m_sertifikasi','id');
            $table->foreignId('id_periode')->constrained('m_periode','id');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('lokasi');
            $table->string('quota_peserta');
            $table->integer('biaya');
            $table->string('no_sertifikasi')->nullable();
            $table->date('kadaluarsa')->nullable();
            $table->boolean('status_disetujui')->default(0)->comment("0 = Belum Disetujui, 1 = Disetujui");
            $table->boolean('input_by')->default(0)->comment("0 = admin, 1 = dosen");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_detail_sertifikasi');
    }
};
