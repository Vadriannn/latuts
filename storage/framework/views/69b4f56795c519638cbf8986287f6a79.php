<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
</head>
<body>
    <h1> Form Edit Kategori </h1>
    <table>
        <form action="<?php echo e(route('kategori.update', $kategori->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <tr>
                <td><label for="nama">Nama Kategori</label></td>
                <td><input type="text" name="nama" id="nama" value="<?php echo e($kategori->nama); ?>" required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Update</button></td>
            </tr>
        </form>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\pf\latuts\resources\views/kategori/edit.blade.php ENDPATH**/ ?>