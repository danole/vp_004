<!DOCTYPE html>
<html lang="ru">
<head>
    <title>main - ГеймсМаркет</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
<div class="main-wrapper">
    <header class="main-header">
        <div class="logotype-container"><a href="<?php echo e(route("index")); ?>" class="logotype-link"><img src="img/logo.png"
                                                                                                alt="Логотип"></a></div>
        <nav class="main-navigation">
            <ul class="nav-list">
                <li class="nav-list__item"><a href="#" class="nav-list__item__link">Главная</a></li>
                <li class="nav-list__item"><a href="#" class="nav-list__item__link">Мои заказы</a></li>
                <li class="nav-list__item"><a href="#" class="nav-list__item__link">Новости</a></li>
                <li class="nav-list__item"><a href="#" class="nav-list__item__link">О компании</a></li>
            </ul>
        </nav>
        <div class="header-contact">
            <div class="header-contact__phone"><a href="#" class="header-contact__phone-link">Телефон: 33-333-33</a>
            </div>
        </div>
        <div class="header-container">
            <div class="payment-container">
                <div class="payment-basket__status">
                    <div class="payment-basket__status__icon-block"><a class="payment-basket__status__icon-block__link"><i
                                class="fa fa-shopping-basket"></i></a></div>
                    <div class="payment-basket__status__basket"><span
                            class="payment-basket__status__basket-value">0</span><span
                            class="payment-basket__status__basket-value-descr">товаров</span></div>
                </div>
            </div>
            <?php if(empty( Auth::user()->name)): ?>
                <div class="authorization-block"><a href="<?php echo e(route('registration')); ?>" class="authorization-block__link">Регистрация</a><a
                        href="<?php echo e(route('login')); ?>" class="authorization-block__link">Войти</a></div>
            <?php else: ?> <h2> <?php echo e(Auth::user()->name); ?> </h2>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <?php echo e(__('Выйти')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
            <?php endif; ?>
        </div>
    </header>
    <div class="middle">
        <div class="sidebar">
            <div class="sidebar-item">
                <div class="sidebar-item__title">Категории</div>
                <div class="sidebar-item__content">
                    <ul class="sidebar-category">
                        <?php $__currentLoopData = $categoryName; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="sidebar-category__item"><a href="#" class="sidebar-category__item__link"><?php echo e($value); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="sidebar-item">
            <div class="sidebar-item__title">Последние новости</div>
            <div class="sidebar-item__content">
              <div class="sidebar-news">
                <div class="sidebar-news__item">
                  <div class="sidebar-news__item__preview-news"><img src="img/cover/game-2.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                  <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                </div>
                <div class="sidebar-news__item">
                  <div class="sidebar-news__item__preview-news"><img src="img/cover/game-1.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                  <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                </div>
                <div class="sidebar-news__item">
                  <div class="sidebar-news__item__preview-news"><img src="img/cover/game-4.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                  <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link">О новых играх в режиме VR</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="main-content">
         <?php echo $__env->yieldContent('content'); ?>
          </div>
      </div>
<footer class="footer">
    <div class="footer__footer-content">
        <div class="random-product-container">
            <div class="random-product-container__head">Случайный товар</div>
            <div class="random-product-container__content">
                <div class="item-product">
                    <div class="item-product__title-product"><a href="#" class="item-product__title-product__link">The Witcher 3: Wild Hunt</a></div>
                    <div class="item-product__thumbnail"><a href="#" class="item-product__thumbnail__link"><img src="img/cover/game-1.jpg" alt="Preview-image" class="item-product__thumbnail__link__img"></a></div>
                    <div class="item-product__description">
                        <div class="item-product__description__products-price"><span class="products-price">400 руб</span></div>
                        <div class="item-product__description__btn-block"><a href="#" class="btn btn-blue">Купить</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__footer-content__main-content">
            <p>
                Интернет-магазин компьютерных игр ГЕЙМСМАРКЕТ - это
                онлайн-магазин игр для геймеров, существующий на рынке уже 5 лет.
                У нас широкий спектр лицензионных игр на компьютер, ключей для игр - для активации
                и авторизации, а также карты оплаты (game-card, time-card, игровые валюты и т.д.),
                коды продления и многое друго. Также здесь всегда можно узнать последние новости
                из области онлайн-игр для PC. На сайте предоставлены самые востребованные и
                актуальные товары MMORPG, приобретение которых здесь максимально удобно и,
                что немаловажно, выгодно!
            </p>
        </div>
    </div>
    <div class="footer__social-block">
        <ul class="social-block__list bcg-social">
            <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-facebook"></i></a></li>
            <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-twitter"></i></a></li>
            <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
</footer>
</div>
<script src="js/main.js"></script>
</body>
</html>
<?php /**PATH W:\domains\vp_004\resources\views/layouts/index.blade.php ENDPATH**/ ?>