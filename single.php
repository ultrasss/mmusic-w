<?php get_header(); ?>
<?php the_post(); ?>
<div class="container_max-w">
    <div class="container container-w margin__area">
        <div class="privacy__textarea">
            <div class="privacy__item">
                <a class="privacy__title">Политика конфиденциальности. Стандартная форма.</a>
            </div>
        </div>
        <div class="privacy__textarea">
            <?php the_content(); ?> 
        </div>
    </div>
</div>


<?php get_footer(); ?>