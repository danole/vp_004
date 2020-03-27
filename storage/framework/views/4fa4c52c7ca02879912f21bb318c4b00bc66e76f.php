<?php $__currentLoopData = $allProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('editSelectProduct',['id'=>$item->id])); ?>"><?php echo e($item->title); ?></a><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH W:\domains\vp_004\resources\views/admin/editProduct.blade.php ENDPATH**/ ?>