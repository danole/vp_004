<?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('editSelectCategory',['id'=>$item->id])); ?>"><?php echo e($item->title); ?></a><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH W:\domains\vp_004\resources\views/admin/editCategory.blade.php ENDPATH**/ ?>