<?php
$menu_location = 'nombre_de_la_ubicacion_del_menu'; // Cambia esto al nombre de la ubicación real de tu menú
$menu_items = wp_get_nav_menu_items($menu_location);

foreach ($menu_items as $menu_item) {
    if ($menu_item->title === 'Propietarios') {
        $prop_url = $menu_item->url;
        break;
    }
}

$base_url = $prop_url; // URL del menú "Propietarios"
$inmo_id = 237;
$tipo = 1;

$final_url = add_query_arg(array('inmo' => $inmo_id, 'tipo' => $tipo), $base_url);


// Función para crear las páginas automáticamente
function create_custom_pages() {
    // ... (código anterior)

    add_action('admin_menu', 'custom_pages_menu'); // Agrega la acción para crear el menú
}

// Función para crear el menú en el panel de administración
function custom_pages_menu() {
    add_menu_page(
        'Crear Páginas Automáticas', // Título de la página en el menú
        'Crear Páginas', // Título del menú
        'manage_options', // Capacidad requerida para ver y usar el menú
        'custom-pages', // Slug del menú
        'create_custom_pages' // Función que se ejecuta al hacer clic en el menú
    );
}

// Acción para ejecutar la función al activar el plugin
register_activation_hook(__FILE__, 'create_custom_pages');

// Función que se ejecuta al hacer clic en el botón
function create_custom_pages() {
    // ... (código anterior)

    echo '<div class="wrap">';
    echo '<h2>Crear Páginas Automáticas</h2>';

    if (isset($_POST['create_pages'])) {
        create_custom_pages(); // Llama a la función para crear las páginas
        echo '<div class="notice notice-success"><p>Páginas creadas exitosamente.</p></div>';
    }

    echo '<form method="post">';
    echo '<input type="hidden" name="create_pages" value="1">';
    submit_button('Crear Páginas');
    echo '</form>';
    echo '</div>';
}



add_action( 'admin_bar_menu', 'anadir_productos_barra', 500 );
function anadir_productos_barra( $wp_admin_bar ) {
    $args = array(
        'id'    => 'enlace-productos',
        'title' => __( 'Blackcats' ),
        'href'  => 'blackcats.com.co',
    );
    $wp_admin_bar->add_node($args);
}
add_action( 'admin_bar_menu', 'anadir_submenu_barra', 500 );
function anadir_submenu_barra( $wp_admin_bar ) {
    $wp_admin_bar->add_menu( array(
        'parent' => 'enlace-productos',
        'id'     => 'id_apariencia',
        'title'  => __('Apariencia2'),
        'href'   => 'blackcats.com.co/documentacion',
    ) );
}