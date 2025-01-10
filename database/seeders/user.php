<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Arya',
            'email' => 'arya@yahoo.com',
            'password' => Hash::make('12345678'),
            'id_identitas' => 1,
            'id_jenis_pengguna' => 2,
        ]);
    }
}
