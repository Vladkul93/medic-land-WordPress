<footer>
    <div class="footer">
        <div class="footer-box">
            <div class="box__info" id="nav">
                <div class="menu-item">
                    <?php the_field('Services'); ?>
                </div>
                <div class="menu-item item-none">
                    <?php the_field('Services'); ?>
                </div>
                <div class="menu-item item-none">
                    <?php the_field('Services'); ?>
                </div>
                <div class="menu-item">
                    <div class="submenu">
                        <?php the_field('contact_1'); ?>
                    </div>
                </div>
            </div>
            <div class="box__info " id="nav">
                <div class="menu-item ">
                    <?php the_field('Services'); ?>
                </div>
                <div class="menu-item item-none">
                    <?php the_field('Services'); ?>
                </div>
                <div class="menu-item item-none">
                    <?php the_field('Services'); ?>
                </div>
                <div class="menu-item width-menu">
                    <div class="submenu">
                        <?php the_field('contact_2'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__contact contact-border">
        <div class="footer__cont">
            <blockquote>(c) 2022. Центр космелогии. Все права защищены.
                Наши сертификаты на осуществление деятельности.
                Патенты на использование технологий.</blockquote>
            <p class="contact-conf">Политика конфиденциальности</p>
            <button class="footer__btn blinded-btn"><img class="invert-img"
                    src="<?php bloginfo('template_url'); ?>/assets/img/eye.svg" alt="">Версия для
                слабовидящих</button>
        </div>
        <div class="footer__social">
            <div class=" left-height">
                <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%9A%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D0%B5">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/vk.svg" alt="vk-link">
                </a>
            </div>
            <div class=" left-height">
                <a href="https://www.youtube.com/">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/youtube.svg" alt="youtube-ink">
                </a>
            </div>
            <div class=" left-height">
                <a href="https://www.facebook.com/">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="facebook-link">
                </a>
            </div>
            <div class=" left-height line-right__none">
                <a href="https://www.instagram.com/">
                    <img src=" <?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="instagram-link">
                </a>
            </div>
        </div>
    </div>
</footer>
<a href="#header" class="top">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/up.svg" alt="up">
</a>
</div>
<?php wp_footer(); ?>
</body>

</html>