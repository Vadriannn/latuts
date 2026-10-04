<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Form Tambah Kategori</h1>
    <table>
        <form action="<?php echo e(route('kategori.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <tr>
                <td>Nama Kategori</td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </form>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\pf\latuts\resources\views/kategori/create.blade.php ENDPATH**/ ?>