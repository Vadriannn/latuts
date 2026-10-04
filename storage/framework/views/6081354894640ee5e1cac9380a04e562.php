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
            <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td> <?php echo e($loop->iteration); ?></td>
                <td> <?php echo e($kategori->nama); ?></td>
                <td> 
                    <a href="<?php echo e(route('kategori.edit', $kategori->id)); ?>">Edit</a>
                    <form action="<?php echo e(route('kategori.destroy', $kategori->id)); ?>" method="POST" style="display: inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a href="<?php echo e(route('kategori.create')); ?>">Tambah Kategori</a>
    <a href="<?php echo e(route('barang.index')); ?>">Daftar Barang</a>
</body>
</html><?php /**PATH C:\xampp\htdocs\pf\latuts\resources\views/kategori/index.blade.php ENDPATH**/ ?>