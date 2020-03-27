Создать категорию
<form action="<?php echo e(route('changeCategory')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <p>Введите название категории</p>
    <input type="text" name="title">
    <p>Введите описание категории</p>
    <textarea name="description" cols="30" rows="10"></textarea><br><br>
    <input type="submit" name="submit" value="Создать категорию"><br><br>
    <?php if(!empty($error)): ?>
        <?php $__currentLoopData = $error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($value); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</form>
<a href="<?php echo e(route('admin')); ?>">На главную</a>

<?php /**PATH W:\domains\vp_004\resources\views/admin/createCategory.blade.php ENDPATH**/ ?>