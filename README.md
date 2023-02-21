# class-custom-post-types
Helper class custom post types for wordpress

/* Ejemplo */
/* Por defecto todos los parametros son true */
$productos = new CustomPostType('Producto', 'Productos', 'o', array(
    "capability_type" => "post",
    'supports'  => array( 'title' ),
    'taxonomies' => array( 'category', 'post_tag' ),
    'menu_position' => 8,
    'hierarchical'          => false,
    'public'                => false,
    'show_ui'               => false,
    'show_in_menu'          => false,
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => false,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => false,
    'menu_icon'             => 'dashicons-hammer',
    'capability_type'       => 'page',
    'rewrite' => array('slug' => 'productos','with_front' => false)
));
