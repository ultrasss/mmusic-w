<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="ie=edge">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Проект Второе дыхание: проведение тренингов и лекций, направленных на развитие в профессиональной деятельности, в отношениях с друзьями и близкими, саморазвитие."/>
    <title>M | Music</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#66c4d0">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   var z = null;m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(90028018, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90028018" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    

    <?php wp_head(); ?>

</head>

<body>
    <header class="header">
         <div class="container">
            <nav class="nav">
                <ul class="header__menu">
                    <li>
                        <a href="<?php echo get_page_link (15); ?>" class="header__link">Главная</a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link (110); ?>" class="header__link">О проекте</a>
                    </li>
                    <li>
                        <a href="#" class="header__link">Контакты</a>
                    </li>
                </ul>   
                <?php the_custom_logo(); ?>
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
                        <a href="<?php the_field('youtube_chanell', 15); ?>" class="social__link">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/YT_icon.png" alt="Иконка Youtube" width="65" height="65">
                        </a>
                    </li>
                </ul>
            </nav>
         </div>   
    </header>