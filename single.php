<?php get_header(); ?>
<?php the_post(); ?>
<section class="сonfidency">


    <div class="container">
        <div class="privacy__textarea">
            <div class="privacy__item">
                <a class="privacy__title">Политика конфиденциальности. Стандартная форма.</a>
            </div>
        </div>
        <div class="privacy__textarea">
            <?php the_content(); ?> 
        </div>
    </div>

</section>


<?php get_footer(); ?>