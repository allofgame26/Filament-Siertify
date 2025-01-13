<?php

use App\Models\t_detail_pelatihan;
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
        Schema::create('t_peserta_pelatihan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users','id');
            $table->foreignId('id_detail_pelatihan')->constrained('t_detail_pelatihan','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_peserta_pelatihan');
    }
};
