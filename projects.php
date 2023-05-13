<?php
/*
Template Name: projects
*/
?>

<?php get_header(); ?>


<section class="projects">
        <div class="container">
            <div class="projects__title"><?php the_field('projects-title'); ?></div>
            <div class="projects__inner">
                <div class="projects__column">
                    <div class="projects__block">
                        <a href="<?php echo get_page_link (163); ?>">
                            <img class="projects__image" src="<?php the_field('projects_shfs-img'); ?>" alt="">
                        </a>
                        <div class="projects__subtitle"><?php the_field('projects_shfs-title'); ?></div>
                        <div class="projects__text"><?php the_field('projects_shfs-text'); ?></div>
                        <div class="projects__button">
                            <a class="projects__start projects__start-1" href="<?php echo get_page_link (163); ?>">
                                <span class="projects__link">Подробнее</span>
                            </a>
                        </div>
                    </div>    
                </div>
                <div class="projects__column">
                    <div class="projects__block">
                        <a href="<?php echo get_page_link (165); ?>">
                            <img class="projects__image" src="<?php the_field('projects_shfm-img'); ?>" alt="">
                        </a>
                        <div class="projects__subtitle"><?php the_field('projects_shfm-title'); ?></div>
                        <div class="projects__text"><?php the_field('projects_shfm-text'); ?></div>
                        <div class="projects__button">
                            <a class="projects__start projects__start-1" href="<?php echo get_page_link (165); ?>">
                                <span class="projects__link">Подробнее</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="projects__column">
                    <div class="projects__block">
                        <a href="<?php echo get_page_link (167); ?>">
                            <img class="projects__image" src="<?php the_field('projects_kivu-img'); ?>" alt="">
                        </a>
                        <div class="projects__subtitle"><?php the_field('projects_kivu-title'); ?></div>
                        <div class="projects__text"><?php the_field('projects_kivu-text'); ?></div>
                        <div class="projects__button">
                            <a class="projects__start projects__start-1" href="<?php echo get_page_link (167); ?>">
                                <span class="projects__link">Подробнее</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="projects__column">
                    <div class="projects__block">
                        <a href="<?php echo get_page_link (280); ?>">
                            <img class="projects__image" src="<?php the_field('projects_shprs-img'); ?>" alt="">
                        </a>
                        <div class="projects__subtitle"><?php the_field('projects_shprs-title'); ?></div>
                        <div class="projects__text"><?php the_field('projects_shprs-text'); ?></div>
                        <div class="projects__button">
                            <a class="projects__start projects__start-1" href="<?php echo get_page_link (280    ); ?>">
                                <span class="projects__link">Подробнее</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<?php get_footer(); ?>