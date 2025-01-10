<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jenis_pengguna extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_jenis_pengguna')->insert([
            'nama_jenis_pengguna' => 'Admin',
            'kode_jenis_pengguna' => 'ADM',
            'created_at' => now(),
        ]);
        
        DB::table('m_jenis_pengguna')->insert([
            'nama_jenis_pengguna' => 'Super Admin',
            'kode_jenis_pengguna' => 'SDM',
            'created_at' => now(),
        ]);
        
        DB::table('m_jenis_pengguna')->insert([
            'nama_jenis_pengguna' => 'Dosen',
            'kode_jenis_pengguna' => 'DSN',
            'created_at' => now(),
        ]);

        DB::table('m_jenis_pengguna')->insert([
            'nama_jenis_pengguna' => 'Pemimpin',
            'kode_jenis_pengguna' => 'PMP',
            'created_at' => now(),
        ]);
    }
}
