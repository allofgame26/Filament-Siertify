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
        Schema::create('m_periode', function (Blueprint $table) {
            $table->id();
            $table->string('nama_periode');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('deskripsi_periode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_periode');
    }
};
