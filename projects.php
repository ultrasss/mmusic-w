<?php
/*
Template Name: projects
*/
?>
<?php get_header(); ?>


<section class="projects">
    <div class="container_max-w"> 
    <div class="container container-w">
        <div class="projects__inner">
            <div class="projects__column">
                <img class="projects__image" src="<?php the_field('projects_shfs-img'); ?>" alt="">
                <a class="projects__title"><?php the_field('projects_shfs-title'); ?></a>
                <p class="projects__text"><?php the_field('projects_shfs-text'); ?></p>
                <button class="projects__start">
                    <a class="projects__link" href="#">Подробнее</a>
                </button>
            </div>
            <div class="projects__column">
                <img class="projects__image" src="<?php the_field('projects_shfm-img'); ?>" alt="">
                <a class="projects__title"><?php the_field('projects_shfm-title'); ?></a>
                <p class="projects__text"><?php the_field('projects_shfm-text'); ?></p>
                <button class="projects__start">
                    <a class="projects__link" href="#">Подробнее</a>
                </button>
            </div>
            <div class="projects__column">
                <img class="projects__image" src="<?php the_field('projects_kivu-img'); ?>" alt="">
                <a class="projects__title"><?php the_field('projects_kivu-title'); ?></a>
                <p class="projects__text"><?php the_field('projects_kivu-text'); ?></p>
                <button class="projects__start">
                    <a class="projects__link" href="#">Подробнее</a>
                </button>
            </div>
        </div>
    </div>
    </div>
</section>


<?php get_footer(); ?>