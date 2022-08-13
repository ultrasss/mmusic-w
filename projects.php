<?php
/*
Template Name: projects
*/
?>
<?php get_header(); ?>

<!-- <?php the_content(); ?> -->

<section class="projects">
    <div class="container">
        <div class="projects__inner">
            <div class="projects__column">
                <img class="projects__image" src="<?php the_field('projects_kivv-img'); ?>" alt="">
                <a class="projects__title"><?php the_field('projects_kivv-title'); ?></a>
                <p class="projects__text"><?php the_field('projects_kivv-text'); ?></p>
                <button class="projects__start">
                    <a class="projects__link" href="#">Подробнее</a>
                </button>
            </div>
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
        </div>
    </div>
</section>


<?php get_footer(); ?>