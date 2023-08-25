<?php

require_once BACKCATS_THEME_DIR . '/core/version.php';
require_once BACKCATS_THEME_DIR . '/core/login.php';
require_once BACKCATS_THEME_DIR . '/core/menus.php';

function blackcats_styles (){
    wp_enqueue_style('maya-grip', get_stylesheet_directory_uri(). '/assets/librerias/mayagrip/mayagrip-min.css' );
    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri(). '/assets/librerias/fontawesome-free-6.4.2-web/css/all.min.css' );
    wp_enqueue_style('maya-imagenover', get_stylesheet_directory_uri(). '/assets/librerias/imagenover/imagehover.css' );
}
add_action('get_footer', 'blackcats_styles');

function blackcats_styles_2 (){

}
add_action('wp_enqueue_scripts', 'blackcats_styles_2');

