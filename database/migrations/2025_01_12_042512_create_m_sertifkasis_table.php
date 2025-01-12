<?php

use App\Models\m_vendor_sertifikasi;
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
        Schema::create('m_sertifkasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sertifikasi');
            $table->foreignId('id_vendor_sertifikasi')->constrained('m_vendor_sertifikasi','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_jenis_pelatihan_sertifikasi')->constrained('m_jenis_sertifikasi_pelatihan','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('status')->default(0)->comment("0 = nasional, 1 = internasional");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_sertifkasi');
    }
};