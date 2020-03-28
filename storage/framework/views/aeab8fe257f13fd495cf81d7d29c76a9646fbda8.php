Изменить товар
<form action="<?php echo e(route('updateSelectProduct')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <p>Введите название товара</p>
    <input type="text" name="title" value="<?php echo e($change['0']); ?>">
    <p>Введите категорию товара</p>
    <input type="number" name="category_id" value="<?php echo e($change['2']); ?>">
    <p>Введите цену товара</p>
    <input type="number" name="price" value="<?php echo e($change['1']); ?>">
    <p>Введите путь к картинке</p>
    <input type="text" name="image" value="<?php echo e($change['3']); ?>">
    <p>Введите описание товара</p>
    <textarea name="description" cols="30" rows="10"><?php echo e($change['4']); ?></textarea><br><br>
    <input type="hidden" name="id" value="<?php echo e($change['5']); ?>">
    <input type="submit" name="submit" value="Изменить товар"><br><br>
    <?php if(!empty($error)): ?>
        <?php $__currentLoopData = $error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($value); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</form>
<a href="<?php echo e(route('admin')); ?>">На главную</a>
<?php /**PATH W:\domains\vp_004\resources\views/admin/editSelectProduct.blade.php ENDPATH**/ ?>