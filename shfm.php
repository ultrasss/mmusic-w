<?php
/*
Template Name: shfm
*/
?>

<?php get_header(); ?>
    
<section class="shfm__main">
<div class="container">
        <h1 class="branch__title-text"><?php the_field('shfm-branch-title'); ?></h1>
        <p class="branch__subtitle-text"><?php the_field('shfm-branch-subtitle'); ?></p>
        <div class="branch__button">
            <a class="branch__start branch__start-1" href="#b__link">
                <span class="branch__link">начать</span>
            </a>
        </div>
</div> 
</section>
    </div>
    <section class="branch__block">
    <a name="b__link"></a>
    <div class="container_max-w">
        <div class="container container-w">
            <div class="branch__inner">
                <!-- <div class="branch__column">
                    <img class="branch-img" src="<?php the_field('shfm-branch-img'); ?>" alt="">
                </div>
                <div class="branch__column"> -->
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
                            'category'      =>  9
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
                        <a class="branch__block-text-text"><?php the_field('shfm-branch__block-text'); ?></a>
                    </div>
                </div>
            </div> 
        </div>      
    </div>
    </section>
    <section class="video">
            <div class="container">
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
                    
                    
                </div>
            </div>
    </section>
    <?php get_footer(); ?>




