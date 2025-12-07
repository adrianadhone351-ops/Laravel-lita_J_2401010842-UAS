



<?php $__env->startSection('title', 'Daftar Produk'); ?>

<?php $__env->startSection('content'); ?>
    <h3>Daftar Produk</h3>

    <ul>
        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($item['nama']); ?> - Rp <?php echo e(number_format($item['harga'], 0, ',', '.')); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\INSTIKI\Downloads\pertemuan3\resources\views/produk/index.blade.php ENDPATH**/ ?>