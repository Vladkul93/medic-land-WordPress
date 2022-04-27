<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDI</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="box">
        <header id="header">
            <div class="header__box">
                <div class="header__contact">
                    <div class="header__logo ">
                        <?php the_custom_logo() ?>
                    </div>
                    <div class="line-left">
                        <span class="header__phone">
                            <a href="tel:+7 (123) 456 78 90"> <?php the_field('phone_popap'); ?> </a>
                        </span>
                    </div>
                    <div class="line-left line-right">
                        <span class="header__point">Наши салоны <img
                                src="<?php bloginfo('template_url'); ?>/assets/img/down.svg" alt="point">
                        </span>
                    </div>
                    <div class="theme">
                        <button class="header__btn blinded-btn"><img class="invert-img"
                                src="<?php bloginfo('template_url'); ?>/assets/img/eye.svg" alt="">Версия для
                            слабовидящих</button>
                    </div>
                    <div class="header__social">
                        <div class="line-left">
                            <a
                                href="https://ru.wikipedia.org/wiki/%D0%92%D0%9A%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D0%B5">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/vk.svg" alt="vk-link">
                            </a>
                        </div>
                        <div class="line-left">
                            <a href="https://www.youtube.com/">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/youtube.svg" alt="youtube-ink">
                            </a>
                        </div>
                        <div class="line-left">
                            <a href="https://www.facebook.com/">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg"
                                    alt="facebook-link">
                            </a>
                        </div>
                        <div class="line-left line-right">
                            <a href="https://www.instagram.com/#">
                                <img src=" <?php bloginfo('template_url'); ?>/assets/img/instagram.svg"
                                    alt="instagram-link">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header__bg">
                    <div class="header__main">
                        <div class="header__menu">
                            <ul>
                                <li>
                                    <a href="#">Косметология</a>
                                </li>
                                <li>
                                    <a href="#">Пластическая хирургия</a>
                                </li>
                                <li>
                                    <a href="#">Стоматология</a>
                                </li>
                                <li>
                                    <a href="#">Лазерная медицина</a>
                                </li>
                                <li>
                                    <a href="#">Контакты</a>
                                </li>
                                <li>
                                    <a href="#" class=""></a> <button class="menu__btn open-popup">Запись на
                                        прием</button>
                                </li>
                            </ul>
                        </div>
                        <!-- burger -->
                        <span class="burger-menu" onclick="openNav()">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/burger.svg" alt="burger">
                        </span>
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/closeBurg.svg" alt="close">
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Косметология</a>
                                </li>
                                <li>
                                    <a href="#">Пластическая хирургия</a>
                                </li>
                                <li>
                                    <a href="#">Стоматология</a>
                                </li>
                                <li>
                                    <a href="#">Лазерная медицина</a>
                                </li>
                                <li>
                                    <a href="#">Контакты</a>
                                </li>
                                <li>
                                    <a href="tel:+7 (123) 456 78 90"><?php the_field('phone_popap'); ?></a>
                                </li>
                                <li>
                                    <a href="#" class=""></a> <button class="menu__btn open-popup btn-burger">Запись на
                                        прием</button>
                                </li>
                                <li>
                                    <span class="header__point-burger">Наши салоны <img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/down.svg"
                                            alt="point"></span>
                                </li>
                                <div class="header__social-burger">
                                    <a href="#">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/vk.svg" alt="vk-link">
                                    </a>
                                    <a href="#">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/youtube.svg"
                                            alt="youtube-ink">
                                    </a>
                                    <a href="#">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg"
                                            alt="facebook-link">
                                    </a>
                                    <a href="#">
                                        <img src=" <?php bloginfo('template_url'); ?>/assets/img/instagram.svg"
                                            alt="instagram-link">
                                    </a>
                                </div>
                            </ul>
                        </div>
                        <!-- burger -->
                        <!-- popup -->
                        <div class="popup">
                            <form class="popup-menu">
                                <div class="popup-close">
                                    <img class="pop-close  close-popup"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/close.svg" alt="burger">
                                </div>
                                <p class="popup-title">Запсь на приём</p>
                                <?php echo do_shortcode('[contact-form-7 id="75" title="Без названия"]') ?>
                            </form>
                        </div>
                        <!-- popup -->
                        <div class="header__center">
                            <div class="header__about">
                                <div class="header__title">
                                    <p class="header__subtitle">Косметология</p>
                                    <p class="header__text">Современный мир диктует новые каноны жизни: ухоженное лицо и
                                        тело, стройная, подтянутая фигура — сегодня это неотъемлемые черты
                                        привлекательной внешности, характеризующие человека благополучного и успешного.
                                    </p>
                                    <button class="title__btn">подробнее</button>
                                    <!-- arrow-slider -->
                                    <div class="arrow__box">
                                        <div class="arrow-slider">
                                            <div class="swiper-button-prev"><img
                                                    src="<?php bloginfo('template_url'); ?>/assets/img/ArrowLeft.svg"
                                                    alt="Left">
                                            </div>
                                            <div class="swiper-button-next"><img
                                                    src="<?php bloginfo('template_url'); ?>/assets/img/Arrowright.svg"
                                                    alt="right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- arrow-slider -->
                                <!-- slider -->
                                <div class="slider">
                                    <div class="image-slider swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php
                                        global $post;
                                        $myposts = get_posts([ 
                                            'numberposts' => -1,
                                        ]);
                                        if( $myposts ){
                                            foreach( $myposts as $post ){
                                                setup_postdata( $post );
                                                ?>
                                            <div class="swiper-slide">
                                                <div class="slider-img">
                                                    <?php  the_post_thumbnail() ?>
                                                </div>
                                            </div>
                                            <?php  }}   wp_reset_postdata(
                                                array(746,533),
                                                array(
                                                    'class'=>'slider-img'
                                                )
                                            ); ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider -->
                            </div>
                        </div>
                    </div>
                    <div class="header__tab">
                        <div class="content">
                            <div class="tabs">
                                <nav class="tabs__items">
                                    <a href="#tab_01" class="tabs__item one">Комплексные процедуры</a>
                                    <a href="#tab_02" class="tabs__item two active">Центр обучения</a>
                                    <a href="#tab_03" class="tabs__item three ">VIP клиентам</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>