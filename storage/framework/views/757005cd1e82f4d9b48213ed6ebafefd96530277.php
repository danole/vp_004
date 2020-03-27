<?php $__env->startSection('content'); ?>
        <h3>Ваш заказ</h3>
        <p>Игра:<?php echo e($product['0']->title); ?></p>
        <p>Цена:<?php echo e($product['0']->price); ?></p>
        <h3>Оставте свои данные, чтобы наш менеджер связался с вами:</h3>
        <?php if(isset($user)): ?>
            <form action="<?php echo e(route('sell')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <p>Ваше имя</p>
                <input type="text" value="<?php echo e($user->name); ?>" name="name"><br>
                <p>Ваш email</p>
                <input type="email" name="email" value="<?php echo e($user->email); ?>"><br>
                <br>
                <input type="hidden" name="id" value="<?php echo e($id); ?>">
                <input type="submit">
            </form>
        <?php else: ?>
            <form action="<?php echo e(route('sell')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <p>Ваше имя</p>
                <input type="text" name="name"><br>
                <p>Ваш email</p>
                <input type="email" name="email"><br>
                <br>
                <input type="hidden" name="id" value="<?php echo e($id); ?>">
                <input type="submit">
            </form>
            <br>
        <?php endif; ?>
    <?php if(!empty($error)): ?>
        <?php $__currentLoopData = $error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p style="color: red"><?php echo e($value); ?></p><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\vp_004\resources\views/buy.blade.php ENDPATH**/ ?>