Изменить товар
<form action="<?php echo e(route('updateSelectProduct')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <p>Введите название товара</p>
    <input type="text" name="title" value="<?php echo e($changeTitle); ?>">
    <p>Введите категорию товара</p>
    <input type="number" name="category_id" value="<?php echo e($changeCategory_id); ?>">
    <p>Введите цену товара</p>
    <input type="number" name="price" value="<?php echo e($changePrice); ?>">
    <p>Введите путь к картинке</p>
    <input type="text" name="image" value="<?php echo e($changeImage); ?>">
    <p>Введите описание товара</p>
    <textarea name="description" cols="30" rows="10"><?php echo e($changeDescription); ?></textarea><br><br>
    <input type="hidden" name="id" value="<?php echo e($changeId); ?>">
    <input type="submit" name="submit" value="Изменить товар"><br><br>
    <?php if(!empty($error)): ?>
        <?php $__currentLoopData = $error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($value); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</form>
<a href="<?php echo e(route('admin')); ?>">На главную</a>
<?php /**PATH W:\domains\vp_004\resources\views/admin/editSelectProduct.blade.php ENDPATH**/ ?>