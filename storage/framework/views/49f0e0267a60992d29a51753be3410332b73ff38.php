<?php $__env->startSection('content'); ?>
    Категория - <?php echo e($category); ?>

    ID - <?php echo e($id); ?>

    <?php (var_dump($orders)); ?>
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\vp_004\resources\views/category.blade.php ENDPATH**/ ?>