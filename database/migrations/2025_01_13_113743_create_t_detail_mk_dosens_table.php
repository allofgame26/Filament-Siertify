<?php

use App\Models\m_bidang_minat;
use App\Models\m_mata_kuliah;
use App\Models\User;
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
        Schema::create('t_detail_mk_dosen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users','id');
            $table->foreignId('id_mk')->constrained('m_mata_kuliah','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_detail_mk_dosen');
    }
};
