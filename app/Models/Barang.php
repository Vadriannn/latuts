<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    // 1. Menegaskan nama tabel di database (opsional tapi praktik yang sangat bagus)
    protected $table = 'barangs';

    // 2. Daftar kolom yang diizinkan untuk diisi dari form (Wajib ada)
    protected $fillable = [
        'nama',
        'harga',
        'stok',
        'deskripsi',
        'kategori_id',
    ];

    // 3. Menghubungkan Barang ke Kategori (Relasi belongsTo)
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
