<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="content-top">
            <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск,
                скачать Steam игры после оплаты
            </div>
            <div class="image-container"><img src="img/slider.png" alt="Image" class="image-main"></div>
        </div>
        <div class="content-middle">
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title"><?php echo e($order['0']->title); ?></div>
                </div>
                <div class="content-head__search-block">
                    <div class="search-container">
                        <form class="search-container__form">
                            <input type="text" class="search-container__form__input">
                            <button class="search-container__form__btn">search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-main__container">
                <div class="product-container">
                    <div class="product-container__image-wrap"><img src="img/cover/game-1.jpg"
                                                                    class="image-wrap__image-product"></div>
                    <div class="product-container__content-text">
                        <div class="product-container__content-text__title"><?php echo e($order['0']->title); ?></div>
                        <div class="product-container__content-text__price">
                            <div class="product-container__content-text__price__value">
                                Цена: <b><?php echo e($order['0']->price); ?></b>
                                руб
                            </div>
                            <a href="<?php echo e(route('buy',['id'=>$id])); ?>" class="btn btn-blue">Купить</a>
                        </div>
                        <div class="product-container__content-text__description">
                            <p>
                                <?php echo e($order['0']->description); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-bottom">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\vp_004\resources\views/product.blade.php ENDPATH**/ ?>