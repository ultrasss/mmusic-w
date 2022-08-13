<footer class="footer container_max-w">
        <div class="container container-w">
            <div class="footer__inner">
                <div class="logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_mm2.png" alt="mmusic">
                    <a href="<?php echo get_page_link (15); ?>" class="logo__text-blk">M | Music</a>
                </div>
                <div class="footer__copyright">
                    <a class="footer__copyright-link">2022 © Все права защищены</a>
                    <a class="privacy" href="<?php echo get_page_link (90); ?>">Политика конфиденциальности</a>
                </div>

                <div class="footer__contacts">
                    <a class="footer__contacts-link" href="tel:<?php the_field('phone-number', 15); ?>">
                        <img class="footer__contacts-img" src="<?php bloginfo('template_url'); ?>/assets/img/phone-blk.jpg" alt="phone">
                        <span><?php the_field('phone', 15); ?></span>
                    </a>
                    <a class="footer__contacts-link" href="mailto:<?php the_field('e-mail', 15); ?>">
                        <img class="footer__contacts-img" src="<?php bloginfo('template_url'); ?>/assets/img/mail-blk.jpg" alt="">
                        <span><?php the_field('e-mail', 15); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/form.js"></script> -->
</body>

</html>