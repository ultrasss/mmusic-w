<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<section class="music">
    <div class="container">
        <div class="music__inner">
            <div class="music__column">
                <h1 class="music__title"><?php the_field('title'); ?></h1>
                <p class="music__subtitle"><?php the_field('subtitle'); ?></p>
                <div class="music__button">
                    <a class="music__start" href="<?php echo get_page_link (110); ?>">
                        <span class="music__link">НАЧАТЬ!</span>
                    </a>
                </div> 
            </div>
            <!-- <div class="music__column">
                
                <img src="<?php the_field('main-img'); ?>" alt="">
                
            </div> -->
        </div>
    </div>
</section>
<section class="slider">
    <div class="container">
        <div class="music__slider">
<?php
global $post;
$myposts = get_posts([ 
	'numberposts'   =>  -1,
    'category'      =>  4
]);
if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
?>
            <div class="music__slider-item">
                <div class="music__slider-item-block">
                    <a href="<?php echo get_page_link (110); ?>">
                        <div class="music__slider-text1"><?php the_title(); ?></div>
                    </a>
                    <img class="music__slider-arrow" src="<?php bloginfo('template_url'); ?>/assets/img/music-slider-arrow.svg" alt="">  
                </div>
                <div>
                    <?php the_post_thumbnail(
                        array(129, 129),
                        array(
                            'class' => 'music__slider-image'
                        )
                    ); ?>
                </div>
            </div>
<?php } } wp_reset_postdata(); ?>      
        </div>
    </div>
</section>

<section class="triggers">
        <div class="container">
            <!-- <div class="triggers__inner"> -->
                <div class="triggers__text">
                    <a class="title">Почему музыку изучают</a>                    
                </div>
                <div class="triggers__native">
                    <div class="triggers__native-item">
                        <div class="triggers__native-item-pic">
                            <img class="triggers__native-item-pic-img" src="<?php bloginfo('template_url'); ?>/assets/img/triggers_item1.jpg" alt="">  
                        </div>
                        <div class="triggers__native-item-text">
                            <a class="triggers__native-item-title">Она повсюду</a>
                            <a class="triggers__native-item-subtitle">Огромное количество<br>творчества</a>
                        </div>
                    </div>
                    <div class="triggers__native-item">
                        <div class="triggers__native-item-pic">
                            <img class="triggers__native-item-pic-img" src="<?php bloginfo('template_url'); ?>/assets/img/triggers_item2.jpg" alt="">  
                        </div>
                        <div class="triggers__native-item-text">
                            <a class="triggers__native-item-title">Она меняет</a>
                            <a class="triggers__native-item-subtitle">Мы можем изменять себя и<br>свое настроение</a>
                        </div>
                    </div>
                    <div class="triggers__native-item">
                        <div class="triggers__native-item-pic">
                            <img class="triggers__native-item-pic-img" src="<?php bloginfo('template_url'); ?>/assets/img/triggers_item3.jpg" alt="">  
                        </div>
                        <div class="triggers__native-item-text">
                            <a class="triggers__native-item-title">Ее любят</a>
                            <a class="triggers__native-item-subtitle">Мы окружаем любовью себя<br>и наших друзей</a>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
</section>
<section class="gallery">
    <!-- <div class="container_max-w"> -->
    <div class="container">
        <a class="title">Мы познаем мир через музыку</a>
        <div class="gallery-list">
            <a href="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic1.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic1.jpg" alt="alt">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic2.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic2.jpg" alt="alt">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic3.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic3.jpg" alt="alt">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic4.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic4.jpg" alt="alt">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic5.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic5.jpg" alt="alt">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic6.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic6.jpg" alt="alt">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic7.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic7.jpg" alt="alt">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic8.jpg" class="gallery-item">
                <div class="gallery-item-hover">Посмотреть</div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/pic8.jpg" alt="alt">
            </a>
        </div>
    </div>
        <!-- </div> -->
</section>
<section class="music__about">
    <!-- <div class="container_max-w"> -->
        <!-- <div class="container_max-about"> -->
            <div class="container">
                <div class="music__about_inner">
                    <div class="music__about-item">
                        <a class="title title-about">О проекте</a> 
                        <a class="subtitle"><br><?php the_field('about-subtitle'); ?></a>
                        <a class="title title-about"><?php the_field('about-text'); ?><a>
                        <a class="music__about-text music__about-text-next" href="<?php echo get_page_link (110); ?>">Читать больше -></a>
                    </div>
                    <!-- <img src="../assets/img/music_about_bkgr.jpg" alt="alt"> -->
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/music_about_bkgr.jpg" alt="alt">
              </div>

            </div>
        <!-- </div> -->
    <!-- </div> -->
</section>
<section class="contacts">
            <div class="container">
            <div class="contacts__inner">
                <div class="contacts__column-form">
                    <div class="form">
                        <form action="#" id="form" class="form__body">
                            <a class="title title-form">Есть вопросы? Задавайте!</a>
                            <div class="form__item">
                                <label for="formName" class="form__label">Имя*:</label>
                                <input id="formName"type="text" name="name" class="form__input _req">
                            </div>
                            <div class="form__item">
                                <label for="formEmail" class="form__label">E-mail*:</label>
                                <input id="formEmail" type="text" name="email" class="form__input _req _email">
                            </div>
                            <div class="form__item">
                                <div class="form__title">Кто вы?</div>
                                <div class="options">
                                    <div class="options__item">
                                        <input id="formRightHanded" checked type="radio" value="right" name="hand" class="options__input">
                                        <label for="formRightHanded" class="options__label"><span>Музыкант</span></label>
                                    </div>
                                    <div class="options__item">
                                        <input id="formLeftHanded" type="radio" value="left" name="hand" class="options__input">
                                        <label for="formLeftHanded" class="options__label"><span>НеМузыкант</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form__item">
                                <label for="formMessage" class="form__label">Сообщение:</label>
                                <textarea name="message" id="formMessage" class="form__input"></textarea>
                            </div>
                            <div class="form__item">
                                <div class="form__label">Возраст:</div>
                                <select name="age" class="select">
                                    <option value="от 18 до 25" selected="selected">18-44</option>
                                    <option value="от 25 до 45">44-60</option>
                                    <option value="после 45">60+</option>
                                </select>
                            </div>
                            <div class="form__item">
                                <div class="form__label">Прикрепить фото</div>
                                <div class="file__item"> 
                                    <input id="formImage" accept=".jpg, .png, .gif" type="file" name="image" class="file__input">
                                    <div class="file__button">Выбрать</div>
                                </div>
                                <div id="formPreview" class="file__preview"></div>
                            </div>
                            <div class="form__item">
                                <div class="checkbox">
                                    <input id="formAgreement" type="checkbox" name ="agreement" class="checkbox__input _req">
                                    <label for="formAgreement" class="checkbox__label"><span>Я даю свое согласие на обработку ПД</span></label>
                                </div>
                            </div>
                            <button type="submit" class="form__button">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="contacts__column-image">
                        <img class="contacts-image__item" src="<?php bloginfo('template_url'); ?>/assets/img/contacts_img.jpg" alt="">
                </div>
            </div>
        </div>
</section>

<?php get_footer(); ?>



