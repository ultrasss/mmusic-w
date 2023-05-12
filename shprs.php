<?php
/*
Template Name: shprs
*/
?>
<?php get_header(); ?>

    
        <section class="shprs__main">
            <div class="container">
                <div class="branch__main-inner">
                    <div class="branch__content">
                        <div class="branch__title">
                            <a class="branch__title-text"><?php the_field('shprs-branch-title'); ?></a>
                        </div>
                        <div class="branch__subtitle">
                            <a class="branch__subtitle-text"><?php the_field('shprs-branch-subtitle'); ?></a>
                        </div>
                        <div class="branch__button">
                            <a class="branch__start branch__start-1" href="#b__link">
                                <span class="branch__link">начать</span>
                            </a>
                        </div>  
                    </div>
                </div>
            </div>      
        </section>
    <section class="branch__block">
        <a name="b__link"></a>
        <div class="container_max-w">
            <div class="container container-w">
                <div class="branch__inner">
                    <div class="branch__column">
                        <img class="branch-img" src="<?php the_field('shprs-branch-img'); ?>" alt="">
                    </div>
                    <div class="branch__column">
                        <div class="branch__colontitle">
                            <div class="branch__colontitle-line"></div>
                            <div class="branch__colontitle-note">
                                <a class="branch__colontitle-note-text"><?php the_field('shprs-branch__colontitle-note'); ?></a>
                            </div>
                        </div>
                        <div class="branch__block-title">
                            <a class="branch__block-title-text"><?php the_field('shprs-branch__block-title'); ?></a>
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
                            <a class="branch__block-text-text"><?php the_field('shprs-branch__block-text'); ?></a>
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
                    <a class="title"><?php the_field('shprs-video__title-main'); ?></a>
                </div>
                <div class="video__inner">
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=203]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">«Основы музыкального языка. Лад и мелодия».</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Лекция прошла в концертном зале Татарской филармонии 14 мая 2021 г.</a>
                        </div>
                    </div>
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=204]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">«Основы музыкального языка.Ритм».</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text"> Лекция прошла в концертном зале Татарской филармонии 03 июня 2021 г.</a>
                        </div>
                    </div>
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=205]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">«История вальса».</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Лекция прошла в концертном зале Татарской филармонии 18 ноября 2021 г.</a>
                        </div>
                    </div>
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=206]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">«Music is Light». Вадим Пальмов (фортепиано).</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Лекция-концерт прошла в концертном зале Татарской филармонии 09 декабря 2021 г.</a>
                        </div>
                    </div>
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=207]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">«Золотая коллекция фортепиано». Александр Гиндин (фортепиано).</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Лекция-концерт прошла в концертном зале Татарской филармонии 16 января 2022 г. </a>
                        </div>
                    </div>
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=208]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">Лекция «Профессия — дирижер».</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Лекция прошла в концертном зале Татарской филармонии 31 января 2022 г.</a>
                        </div>
                    </div>
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=209]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">Лекция «История жанров».</p></a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Лекция прошла в концертном зале Татарской филармонии 31 марта 2022 г.</a>
                        </div>
                    </div>
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=210]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">Лекция «Гармония воды и звуки тишины».</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Лекция прошла в концертном зале Татарской филармонии 31 мая 2022 г.</a>
                        </div>
                    </div>
                    <div class="video__item"> 
                        <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=211]'); ?> </div>
                        <div class="video__title">
                            <a class="video__title-text">«История Вальса. Через тернии к звёздам».</a> 
                        </div>
                        <div class="video__text"> 
                            <a class="video__text-text">Лекция прошла в концертном зале Татарской филармонии 7 декабря 2021 г.</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
     
    <?php get_footer(); ?>




