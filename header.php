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