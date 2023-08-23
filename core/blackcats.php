<?php

require_once BACKCATS_THEME_DIR . '/core/version.php';
require_once BACKCATS_THEME_DIR . '/core/login.php';
require_once BACKCATS_THEME_DIR . '/core/menus.php';

function blackcats_styles (){

}
add_action('wp_enqueue_scripts', 'blackcats_styles');

