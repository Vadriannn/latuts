<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $dataBarang = [
        [
            'nama' => 'Nasi Goreng',
            'harga' => 18000,
            'stok' => 10,
            'deskripsi' => 'Enak',
            'kategori_id' => 1,
        ],
        [
            'nama' => 'Mie Goreng',
            'harga' => 18000,
            'stok' => 20,
            'deskripsi' => 'Enak',
            'kategori_id' => 1,
        ],
        [
            'nama' => 'Es Teh',
            'harga' => 5000,
            'stok' => 10,
            'deskripsi' => 'Seger',
            'kategori_id' => 2,
        ],
        [
            'nama' => 'Chitato',
            'harga' => 5000,
            'stok' => 10,
            'deskripsi' => 'Gurih',
            'kategori_id' => 3,
        ]
       ];

       DB::table('barangs')->insert($dataBarang);
    }
}
