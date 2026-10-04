<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataKategori = [
            ['nama' => 'Makanan'],
            ['nama' => 'Minuman'],
            ['nama' => 'Snack']
        ];

        DB::table('kategoris')->insert($dataKategori);
    }
}
