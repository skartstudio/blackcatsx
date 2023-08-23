<?php
/********************************************************
                     Registro de Menus
**********************************************************/
function blackcats_menus(){
	// registro de menis de la plantilla
        register_nav_menus( array (
            'primary_menu'=>__('Menu Primary','blackcats'),
        ));
	}
	add_action('init', 'blackcats_menus');
	/* ---- filtro para añadir clases al menu --- */
	 function blackcats_menu_classes($classes, $item, $args){
				if ($args->theme_location == 'primary_menu')
					{
						$classes[] = 'bk-li';
					}
				return $classes;
			}    
	add_filter('nav_menu_css_class', 'blackcats_menu_classes',1,3);