<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Form Tambah Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <table> 
            <tr>
                <td><label for="nama">Nama Barang:</label></td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="harga">Harga:</label></td>
                <td><input type="number" name="harga" id="harga" required></td>
            </tr>
            <tr>
                <td><label for="stok">Stok:</label></td>
                <td><input type="number" name="stok" id="stok" required></td>
            </tr>
            <tr>
                <td><label for="deskripsi">Deskripsi:</label></td>
                <td><textarea name="deskripsi" id="deskripsi"></textarea></td>
            </tr>
            <tr>
                <td><label for="kategori_id">Kategori:</label></td>
                <td>
                    <select name="kategori_id" id="kategori_id" required>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>