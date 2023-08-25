<?php

require_once BACKCATS_THEME_DIR . '/core/version.php';
require_once BACKCATS_THEME_DIR . '/core/login.php';
require_once BACKCATS_THEME_DIR . '/core/menus.php';

function blackcats_styles (){
    wp_enqueue_style('maya-grip', get_stylesheet_directory_uri(). '/assets/librerias/mayagrip/mayagrip-min.css' );
}
add_action('wp_enqueue_scripts', 'blackcats_styles');

