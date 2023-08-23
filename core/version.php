<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '10.0.0' );
}

/********************************************************
             pie de pagina del panel de Administración
**********************************************************/

function change_footer_admin() { 
    echo '&copy; 2017 - ' ;
    echo date('Y');
    echo ' Copyright <a target="_blank" rel="nofollow" href="https://skartstudio.com/desarrollo-web/wordpress/blackcats/">Sk Art Studio</a>. Todos los derechos reservados - Tema BlackCat Version ', _S_VERSION;  
}  
add_filter('admin_footer_text', 'change_footer_admin');