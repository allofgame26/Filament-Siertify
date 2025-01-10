<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class identitas_diri extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_identitas_diri')->insert([
            'nama_lengkap' => 'Rizki Arya Prayoga',
            'nip' => '2141762051',
            'tempat_lahir' => 'Malang',
            'tanggal_lahir' => '2003-04-24',
            'jenis_kelamin' => 0,
            'alamat' => 'Jl.Candi Telaga Wangi No. 81',
            'no_telp' => '081515430129',
        ]);
    }
}
