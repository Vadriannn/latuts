<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <!-- Kita pakai Bootstrap CDN sederhana agar tampilannya rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Barang</h2>
        <!-- Tombol Tambah Barang -->
        <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-primary">+ Tambah Barang</a>
    </div>

    <!-- Menampilkan pesan sukses jika ada -->
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th width="180px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td> <!-- Otomatis mulai dari angka 1, 2, 3, dst -->
                <td><?php echo e($barang->nama); ?></td>
                <!-- Ini fungsi relasi belongsTo tadi! Langsung panggil nama kategorinya -->
                <td><span class="badge bg-info text-dark"><?php echo e($barang->kategori->nama ?? '-'); ?></span></td>
                <td>Rp <?php echo e(number_format($barang->harga, 0, ',', '.')); ?></td>
                <td><?php echo e($barang->stok); ?></td>
                <td><?php echo e($barang->deskripsi); ?></td>
                <td>
                    <!-- Tombol Edit & Hapus (Akan kita aktifkan di bagian 3 dan 4) -->
                    <a href="<?php echo e(route('barang.edit', $barang->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('barang.destroy', $barang->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="7" class="text-center">Belum ada data barang.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\pf\latuts\resources\views/barang/index.blade.php ENDPATH**/ ?>