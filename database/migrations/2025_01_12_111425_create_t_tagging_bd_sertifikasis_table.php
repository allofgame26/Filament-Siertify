<?php

use App\Models\m_bidang_minat;
use App\Models\m_sertifikasi;
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
        Schema::create('t_tagging_bd_sertifikasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sertifikasi')->constrained('m_sertifikasi','id');
            $table->foreignId('id_bd')->constrained('m_bidang_minat','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_tagging_bd_sertifikasi');
    }
};