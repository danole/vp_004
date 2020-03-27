<?php $__currentLoopData = $allProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action="<?php echo e(route('confirmProduct')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
        <input type="submit" name="submit" value="Удалить товар <?php echo e($item->title); ?>">
    </form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH W:\domains\vp_004\resources\views/admin/deleteProduct.blade.php ENDPATH**/ ?>