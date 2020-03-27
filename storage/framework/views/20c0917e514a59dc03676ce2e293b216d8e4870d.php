Создать товар
<form action="<?php echo e(route('changeProduct')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <p>Введите название товара</p>
    <input type="text" name="title">
    <p>Введите категорию товара</p>
    <input type="number" name="category_id">
    <p>Введите цену товара</p>
    <input type="number" name="price">
    <p>Введите путь к картинке</p>
    <input type="text" name="image">
    <p>Введите описание товара</p>
    <textarea name="description" cols="30" rows="10"></textarea><br><br>
    <input type="submit" name="submit" value="Создать товар"><br><br>
    <?php if(!empty($error)): ?>
        <?php $__currentLoopData = $error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($value); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</form>
<a href="<?php echo e(route('admin')); ?>">На главную</a>
<?php /**PATH W:\domains\vp_004\resources\views/admin/createProduct.blade.php ENDPATH**/ ?>