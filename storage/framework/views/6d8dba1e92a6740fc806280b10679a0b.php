<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Form Tambah Barang</h1>
    <form action="<?php echo e(route('barang.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
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
                        <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\pf\latuts\resources\views/barang/create.blade.php ENDPATH**/ ?>