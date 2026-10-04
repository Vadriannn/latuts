<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Kategori</h2>
    </div>
    <table class="table table-bordered table-striped"> 
        <thead> 
            <td> No </td>
            <td> Nama </td>
            <td> Aksi </td>
        </thead>
        <tbody>
            @foreach ($kategoris as $kategori)
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td> {{ $kategori->nama }}</td>
                <td> 
                    <a href="{{ route('kategori.edit', $kategori->id) }}">Edit</a>
                    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('kategori.create') }}">Tambah Kategori</a>
    <a href="{{ route('barang.index') }}">Daftar Barang</a>
</body>
</html>