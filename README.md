# class-custom-post-types
Helper class custom post types for wordpress<br />

/* Ejemplo */<br />
/* Por defecto todos los parametros son true */<br />
$productos = new CustomPostType('Producto', 'Productos', 'o', array(<br />
    "capability_type" => "post",<br />
    'supports'  => array( 'title' ),<br />
    'taxonomies' => array( 'category', 'post_tag' ),<br />
    'menu_position' => 8,<br />
    'hierarchical'          => false,<br />
    'public'                => false,<br />
    'show_ui'               => false,<br />
    'show_in_menu'          => false,<br />
    'show_in_admin_bar'     => false,<br />
    'show_in_nav_menus'     => false,<br />
    'can_export'            => false,<br />
    'has_archive'           => false,<br />
    'exclude_from_search'   => false,<br />
    'publicly_queryable'    => false,<br />
    'menu_icon'             => 'dashicons-hammer',<br />
    'capability_type'       => 'page',<br />
    'rewrite' => array('slug' => 'productos','with_front' => false)<br />
));<br />
