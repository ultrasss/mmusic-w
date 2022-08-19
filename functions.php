<?php

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'fonts-googleapis', 'https://fonts.googleapis.com' );
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

    wp_deregister_script('jquery' );
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    wp_register_script('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('magnific-popup');
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), 'null', true );
    wp_enqueue_script( 'gallery', get_template_directory_uri() . '/assets/js/gallery.js', array('magnific-popup'), 'null', true );
	wp_enqueue_script( 'form', get_template_directory_uri() . '/assets/js/form.js', array(), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}


add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

// настройка SMTP
add_action( 'phpmailer_init', 'smtp_enable_mail_ru' );
function smtp_enable_mail_ru( $phpmailer ){

	$phpmailer->IsSMTP();

	$phpmailer->CharSet    = 'UTF-8';

	$phpmailer->Host       = 'ssl://smtp.mail.ru';
	$phpmailer->Username   = 'mmusic.online@mail.ru';
	$phpmailer->Password   = 'Sh_yF65>36';
	$phpmailer->SMTPAuth   = true;
	$phpmailer->SMTPSecure = 'ssl';

	$phpmailer->Port       = 465;
	$phpmailer->From       = 'mmusic.online@mail.ru';
	$phpmailer->FromName   = 'MY-Megasite';

	$phpmailer->isHTML( true );
}

?>