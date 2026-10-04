<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<body>
    <h1>Form Edit Barang</h1>
    <form action="<?php echo e(route('barang.update', $barang->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <table>
            <tr>
                <td>Nama Barang: </td>
                <td><input type="text" name="nama" id="nama" value="<?php echo e($barang->nama); ?>" required></td>
            </tr>
            <tr>
                <td>Harga: </td>
                <td><input type="number" name="harga" id="harga" value="<?php echo e($barang->harga); ?>" required></td>
            </tr>
            <tr>
                <td>Stok: </td>
                <td><input type="number" name="stok" id="stok" value="<?php echo e($barang->stok); ?>" required></td>
            </tr>
            <tr>
                <td>Deskripsi: </td>
                <td>
                    <textarea name="deskripsi" id="deskripsi">
                        <?php echo e($barang->deskripsi); ?>

                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Kategori: </td>
                <td>
                    <select name="kategori_id" id="kategori_id" required>
                        <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($kategori->id); ?>" 
                                <?php echo e($barang->kategori_id == $kategori->id ? 'selected' : ''); ?>>
                                    <?php echo e($kategori->nama); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Update</button></td>
            </tr>
        </table>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\pf\latuts\resources\views/barang/edit.blade.php ENDPATH**/ ?>