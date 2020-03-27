<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>Имя:<?php echo e($item->name); ?> Email: <?php echo e($item->email); ?> Номер товара:<?php echo e($item->product_id); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH W:\domains\vp_004\resources\views/admin/allOrders.blade.php ENDPATH**/ ?>