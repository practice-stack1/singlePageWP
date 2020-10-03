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
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'header__nav-item';

        if ($item->current) {
            $atts['class'] .= ' header__nav-item-active';
        }
        //! перевіряємо чи ми знаходимось в ігрушках в одій із двох категорій
        if($item->ID === 175 && ( in_category( 'soft_toys' ) || in_category( 'edy_toys' ))){
            $atts['class'] .= ' header__nav-item-active';
        }
    };

    return $atts;
}

//? реєстрація ключа для генерації карти
function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyBCHJZmaKj7uBoioOZgD9d1s9cwm2b1cW8'; // Ваш ключ Google API
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
?>