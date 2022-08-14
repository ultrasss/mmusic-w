<?php
/*
Template Name: shfm
*/
?>

<?php get_header(); ?>


<section class="projects">
    <div class="container_max-w"> 
        <div class="container container-w margin__area">
            <div class="projects__title"><?php the_field('projects-title'); ?></div>
            <div class="projects__inner">
                <div class="projects__column">
                    <div class="projects__block">
                        <img class="projects__image" src="<?php the_field('projects_shfs-img'); ?>" alt="">
                        <div class="projects__subtitle"><?php the_field('projects_shfs-title'); ?></div>
                        <div class="projects__text"><?php the_field('projects_shfs-text'); ?></div>
                        <div class="projects__start-button">
                            <button class="projects__start projects__start-1">
                                <a class="projects__link" href="#">Подробнее</a>
                            </button>
                        </div>
                    </div>    
                </div>
                <div class="projects__column">
                    <div class="projects__block">
                        <img class="projects__image" src="<?php the_field('projects_shfm-img'); ?>" alt="">
                        <div class="projects__subtitle"><?php the_field('projects_shfm-title'); ?></div>
                        <div class="projects__text"><?php the_field('projects_shfm-text'); ?></div>
                        <div class="projects__start-button">
                            <button class="projects__start projects__start-1">
                                <a class="projects__link" href="#">Подробнее</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="projects__column">
                    <div class="projects__block">
                        <img class="projects__image" src="<?php the_field('projects_kivu-img'); ?>" alt="">
                        <div class="projects__subtitle"><?php the_field('projects_kivu-title'); ?></div>
                        <div class="projects__text"><?php the_field('projects_kivu-text'); ?></div>
                        <div class="projects__start-button">
                            <button class="projects__start projects__start-1">
                                <a class="projects__link" href="#">Подробнее</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>