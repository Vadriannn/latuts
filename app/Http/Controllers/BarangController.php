<?php

namespace App\Http\Controllers;
use App\Models\Barang;  
use App\Models\Kategori;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::with('kategori')->get();
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 1. Ambil data kategori untuk isi dropdown
        $kategoris = Kategori::all();
        // 2. Panggil file view barang/create.blade.php yang baru saja Anda buat
        return view('barang.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        // 1. Validasi: pastikan data tidak boleh kosong
        $request->validate([
            'nama'        => 'required',
            'kategori_id' => 'required',
            'harga'       => 'required|numeric',
            'stok'        => 'required|integer',
            'deskripsi'   => 'required',
        ]);

        // 2. Simpan data ke database
        Barang::create($request->all());

        // 3. Kembali ke daftar barang dengan pesan sukses
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::find($id); // ambil data barang sesuai id yang dikirim dari index
        $kategoris = Kategori::all(); // ambil data kategori buat dropdown 
        return view('barang.edit', compact('barang', 'kategoris')); // kirim data ke view edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'        => 'required',
            'kategori_id' => 'required',
            'harga'       => 'required|numeric',
            'stok'        => 'required|integer',
            'deskripsi'   => 'required',
        ]);
        $barang = Barang::find($id); // Cari barang yang mau diupdate
        $barang->update($request->all()); // Simpan perubahan ke database
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id); // Cari data barang yang mau dihapus berdasarkan ID
        $barang->delete(); // Hapus dari database
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus!');
    }
}
