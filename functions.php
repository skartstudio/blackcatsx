<?php
define( 'BACKCATS_THEME_DIR', trailingslashit( get_template_directory() ) );

require_once BACKCATS_THEME_DIR . '/core/blackcats.php';

// Agregar hojas de estilo y scripts
function custom_theme_scripts() {
    wp_enqueue_style('custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');