<?php
/*
Template Name: shfm
*/
?>

<!-- <div class="shfm-background">
    
</div> -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="ie=edge">
    <title>M | Music</title>
    
    <?php wp_head(); ?>
</head>


<body>
    <div class="branch-background shfm-background">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                        <a href="<?php echo get_page_link (15); ?>" class="logo__text">M | Music</a>
                    </div>

                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a class="menu__link" href="<?php echo get_page_link (15); ?>">Главная</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="<?php echo get_page_link (110); ?>">О проекте</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="phone__item"> 
                        <a class="phone__text" href="tel:<?php the_field('phone-number', 15); ?>">
                        <img class="phone__img" src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="phone">
                        <?php the_field('phone', 15); ?>
                    </a>
                    </div>      
                    <div class="social">
                        <ul class="social__list">
                            <li class="social__item">
                                <a href="<?php the_field('vk', 15); ?>" class="social__link">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/VK_icon.png" alt="Иконка Вконтакте" width="65" height="65">
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="<?php the_field('telegram', 15); ?>" class="social__link">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/TG_icon.png" alt="Иконка Телеграма" width="65" height="65">
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="<?php the_field('youtube', 15); ?>" class="social__link">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/YT_icon.png" alt="Иконка Youtube" width="65" height="65">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>   
        </header>
        <section class="branch__main">
            <div class="container">
                <div class="branch__main-inner">
                    <div class="branch__content">
                        <div class="branch__title">
                            <a class="branch__title-text"><?php the_field('shfm-branch-title'); ?></a>
                        </div>
                        <div class="branch__subtitle">
                            <a class="branch__subtitle-text"><?php the_field('shfm-branch-subtitle'); ?></a>
                        </div>
                        <div class="branch__button">
                            <button class="branch__start branch__start-1">
                                <a class="branch__link" href="#">начать</a>
                            </button>
                        </div>  
                    </div>
                </div>
            </div>      
        </section>
    </div>
    <section class="branch__block">
    <div class="container_max-w">
        <div class="container container-w">
            <div class="branch__inner">
                <div class="branch__column">
                    <img class="branch-img" src="<?php the_field('shfm-branch-img'); ?>" alt="">
                </div>
                <div class="branch__column">
                    <div class="branch__colontitle">
                        <div class="branch__colontitle-line"></div>
                        <div class="branch__colontitle-note">
                            <a class="branch__colontitle-note-text"><?php the_field('shfm-branch__colontitle-note'); ?></a>
                        </div>
                    </div>
                    <div class="branch__block-title">
                        <a class="branch__block-title-text"><?php the_field('shfm-branch__block-title'); ?></a>
                    </div>
                    <div class="branch__slider">
                        <?php
                        global $post;
                        $myposts = get_posts([ 
                            'numberposts'   =>  -1,
                            'category'      =>  5
                            ]);
                            if( $myposts ){
                                foreach( $myposts as $post ){
                                setup_postdata( $post );
                        ?>
                        <div class="branch__slider-item">
                            <!-- <div> -->
                                <?php the_post_thumbnail(
                                array(600, 338)
                                // ,
                                // array(
                                //     'class' => 'branch__slider-image'
                                // )
                                ); ?>
                            <!-- </div> -->
                        </div>
                        <?php } } wp_reset_postdata(); ?>
                    </div>
                    <div class="branch__block-text">
                        <a class="branch__block-text-text"><?php the_field('shfm-branch__block-text'); ?></a>
                    </div>
                </div>
            </div> 
        </div>      
    </div>
    </section>
    <section class="video">
        <div class="container_max-w">
            <div class="container container-w">
                <div class="video__title-main">
                    <a class="title"><?php the_field('shfm-video__title-main'); ?></a>
                </div>
                <div class="video__inner">
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=212]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">«Особенности менеджмента в сфере культуры» — Ираклий Хинтба</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Тестововое видео по теме</a>
                        </div>
                    </div>
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=212]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">«Особенности менеджмента в сфере культуры» — Ираклий Хинтба</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Тестововое видео по теме</a>
                        </div>
                    </div>
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=212]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">«Особенности менеджмента в сфере культуры» — Ираклий Хинтба</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Тестововое видео по теме</a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>
     
                    

    <footer class="footer container_max-w gray-color">
        <div class="container">
            <div class="footer__inner">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                    <a href="<?php echo get_page_link (15); ?>" class="logo__text">M | Music</a>
                </div>
                <div class="footer__copyright">
                    <a class="footer__copyright-link">2022 © Все права защищены</a>
                    <a class="privacy" href="<?php echo get_page_link (90); ?>">Политика конфиденциальности</a>
                </div>

                <div class="footer__contacts">
                    <a class="footer__contacts-link" href="tel:<?php the_field('phone-number', 15); ?>">
                        <img class="footer__contacts-img" src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="phone">
                        <span><?php the_field('phone', 15); ?></span>
                    </a>
                    <a class="footer__contacts-link" href="mailto:<?php the_field('e-mail', 15); ?>">
                        <img class="footer__contacts-img" src="<?php bloginfo('template_url'); ?>/assets/img/mail.svg" alt="">
                        <span><?php the_field('e-mail', 15); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>




