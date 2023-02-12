<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nama'=>'Muhammad Imam Al Amin',
            'nim'=>'221111111',
            'prodi'=>'Software Engineering',
            'fakultas'=>'Informatika',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
    }
}
