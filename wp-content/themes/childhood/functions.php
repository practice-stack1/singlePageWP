<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_scripts() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );

    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);

    //! підключення необхідної нам (останньої) версії скрипта
    //? відключаємо стару версію jquery скріпта
    wp_deregister_script( 'jquery' );
    //?підключаємо нову версію jquery скріпт
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
    //? включаємо jquery 
    wp_enqueue_script( 'jquery' );
};

//?строчка для підключення кастомного логотипу, добавляє функціонал в адмінку по вибору
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );


//? реєстрація ключа для генерації карти
function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyBCHJZmaKj7uBoioOZgD9d1s9cwm2b1cW8'; // Ваш ключ Google API
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
?>