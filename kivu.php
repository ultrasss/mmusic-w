<?php
/*
Template Name: kivu
*/
?>
<?php get_header(); ?>
    
<section class="kivu__main">
    <div class="container">
        <h1 class="branch__title-text"><?php the_field('kivu-branch-title'); ?></h1>
        <p class="branch__subtitle-text"><?php the_field('kivu-branch-subtitle'); ?></p>
        <div class="branch__button">
            <a class="branch__start branch__start-1" href="#b__link">
                <span class="branch__link">начать</span>
            </a>
        </div>
    </div>           
</section>
<section class="branch__block">
    <a name="b__link"></a>
    <div class="container">
        <div class="branch__inner">
            <!-- <div class="branch__column">
                <img class="branch-img" src="<?php the_field('kivu-branch-img'); ?>" alt="">
            </div> -->
            <!-- <div class="branch__column"> -->
                <div class="branch__colontitle">
                    <div class="branch__colontitle-line"></div>
                    <div class="branch__colontitle-note">
                        <a class="branch__colontitle-note-text"><?php the_field('kivu-branch__colontitle-note'); ?></a>
                    </div>
                </div>
                <div class="branch__block-title">
                    <a class="branch__block-title-text"><?php the_field('kivu-branch__block-title'); ?></a>
                </div>
                <div class="branch__slider">
                        <?php
                        global $post;
                        $myposts = get_posts([ 
                            'numberposts'   =>  -1,
                            'category'      =>  10
                            ]);
                            if( $myposts ){
                                foreach( $myposts as $post ){
                                setup_postdata( $post );
                        ?>
                    <div class="branch__slider-item">
                                <?php the_post_thumbnail(
                                array(600, 338)
                                // ,
                                // array(
                                //     'class' => 'branch__slider-image'
                                // )
                                ); ?>     
                    </div>
                        <?php } } wp_reset_postdata(); ?>
                </div>
                <div class="branch__block-text">
                    <a class="branch__block-text-text"><?php the_field('kivu-branch__block-text'); ?></a>
                </div>
        </div> 
    </div>      
</section>
    <section class="video">
        <div class="container">
            <div class="video__title-main">
                <a class="title"><?php the_field('kivu-video__title-main'); ?></a>
            </div>
            <div class="video__inner">
                <div class="video__item"> 
                    <div class="video__player"> <?php echo do_shortcode('[aiovg_video id=232]'); ?> </div>
                    <div class="video__title">
                        <a class="video__title-text">Вебинар "Коучинговые инструменты для управления групповой динамикой"</a> 
                    </div>
                    <div class="video__text"> 
                        <a class="video__text-text">Тестовое видео по тематике</a>
                    </div>
                </div>   
            </div>
        </div>
    </section>
     
                    
    <?php get_footer(); ?>





