<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<main>
    <div class="main__bg">
        <div class="tabs__body">
            <div id="tab_01" class="tabs__block">
                <div class="inovation__block">
                    <div class="block__1">
                        <div class="blok__1-main">
                            <button class="inovation__btn">Инновации</button>
                            <p><?php the_field('about_complex1'); ?> </p>
                            <div class="more-box">
                                <div class="more"><img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/Arrowright.svg"
                                        alt="arrov-right"> </div>
                                <p>подробнее</p>
                            </div>
                        </div>
                        <img class="img-innovation" src="<?php the_field('img_complex1'); ?> " alt="innovations">
                    </div>
                    <div class="block__2">
                        <div class="block__2-main">
                            <ul>
                                <div class="block__2-btn">Эстетика красоты</div>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab_02" class="tabs__block">
                <div class="inovation__block">
                    <div class="block__1">
                        <div class="blok__1-main">
                            <button class="inovation__btn">Инновации</button>
                            <p><?php the_field('about_complex2'); ?> </p>
                            <div class="more-box">
                                <div class="more"><img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/Arrowright.svg"
                                        alt="arrov-right"> </div>
                                <p>подробнее</p>
                            </div>
                        </div>
                        <img class="img-innovation" src="<?php the_field('img_complex2'); ?> " alt="innovations">
                    </div>
                    <div class=" block__2">
                        <div class="block__2-main">
                            <ul>
                                <div class="block__2-btn">Эстетика красоты</div>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab_03" class="tabs__block">
                <div class="inovation__block">
                    <div class="block__1">
                        <div class="blok__1-main">
                            <button class="inovation__btn">Инновации</button>
                            <p><?php the_field('about_complex3'); ?> </p>
                            <div class="more-box">
                                <div class="more"><img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/Arrowright.svg"
                                        alt="arrov-right">
                                </div>
                                <p>подробнее</p>
                            </div>
                        </div>
                        <img class="img-innovation" src="<?php the_field('img_complex3'); ?> " alt="innovations">
                    </div>
                    <div class="block__2">
                        <div class="block__2-main">
                            <ul>
                                <div class="block__2-btn">Эстетика красоты</div>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                                <li class="list-num ">
                                    <p class="list-text">Современных центра в странах СНГ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="tabs-main">
            <div class="tabs__nav tabs-nav">
                <?php the_field('first_blog'); ?>
            </div>
            <div class="tabs__content">
                <div class="tab is-active tab-1">
                    <?php the_field('second_blog'); ?>
                </div>
                <div class="tab tab-2">
                    <?php the_field('third_block'); ?>
                </div>
                <div class="tab tab-3">
                    <?php the_field('fourth_block'); ?>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="special">
    <p class="special-title">Актуальные спецпредложения </p>
    <div class="slick-slider">
        <div class="slider-box">
            <div class="slider__item" style="background-image: url('<?php the_field('img_slider1'); ?>">
                <button class="slider-btn"><?php the_field('title_slider1'); ?></button>
            </div>
            <div class="slider-footer">
                <p><?php the_field('text_slider1'); ?></p>
                <div class="more"><img src="<?php bloginfo('template_url'); ?>/assets/img/Arrowright.svg"
                        alt="arrov-right"> </div>
            </div>
        </div>
        <div class="slider-box">
            <div class="slider__item" style="background-image: url('<?php the_field('img_slider2'); ?>">
                <button class="slider-btn"><?php the_field('title_slider2'); ?></button>
            </div>
            <div class="slider-footer">
                <p><?php the_field('text_slider1'); ?></p>
                <div class="more"><img src="<?php bloginfo('template_url'); ?>/assets/img/Arrowright.svg"
                        alt="arrov-right"> </div>
            </div>
        </div>
        <div class="slider-box">
            <div class="slider__item" style="background-image: url('<?php the_field('img_slider3'); ?>">
                <button class="slider-btn"><?php the_field('title_slider3'); ?></button>
            </div>
            <div class="slider-footer">
                <p><?php the_field('text_slider1'); ?></p>
                <div class="more"><img src="<?php bloginfo('template_url'); ?>/assets/img/Arrowright.svg"
                        alt="arrov-right"> </div>
            </div>
        </div>
        <div class="slider-box">
            <div class="slider__item" style="background-image: url('<?php the_field('img_slider4'); ?>">
                <button class="slider-btn"><?php the_field('title_slider4'); ?></button>
            </div>
            <div class="slider-footer">
                <p><?php the_field('text_slider1'); ?></p>
                <div class="more"><img src="<?php bloginfo('template_url'); ?>/assets/img/Arrowright.svg"
                        alt="arrov-right"> </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>