<?php

    class CustomPostType {

        public $nombre;
        public $nombre_plural;
        public $genero;
        public $args;

        function __construct($name, $plural_name, $genre, $args = array()) {
            $this->nombre = $name;
            $this->nombre_plural = $plural_name;
            $this->genero = $genre;
            $this->args = (array)$args;
            $this->init(array(&$this, "register_post_type"));
        }

        function init($callback) {
            add_action("init", $callback);
        }

        function register_post_type() {

            $label_name = ucwords($this->nombre);
            $label_plural_name = $this->nombre_plural;
            $label_genre = $this->genero;

            $labels = array(
                'name'                  => $label_plural_name,
                'singular_name'         => $label_name,
                'add_new'               => 'Añadir nuev' . $label_genre,
                'add_new_item'          => 'Añadir nuev' . $label_genre . $label_name,
                'edit_item'             => 'Editar ' . $label_name,
                'new_item'              => 'Nuev' . $label_genre . $label_name,
                'all_items'             => 'Tod' . $label_genre . 's l' . $label_genre . 's ' . $label_plural_name,
                'view_item'             => 'Ver ' . $label_name,
                'search_items'          => 'Buscar ' . $label_plural_name,
                'not_found'             => 'No se encuentran ' . $label_plural_name,
                'not_found_in_trash'    => 'No se encuentran ' . $label_plural_name,
                'parent_item_colon'     => '',
                'menu_name'             => $label_plural_name
            );

            $args = array(
                'labels'              => $labels,
                'public'              => true,
                'publicly_queryable'  => true,
                'query_var'           => true,
                'hierarchical'        => true,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_admin_bar'   => true,
                'show_in_nav_menus'   => true,
                'can_export'          => true,
                'exclude_from_search' => true,
                'menu_icon'           => 'dashicons-admin-post',
                'taxonomies'          => array( 'category', 'post_tag' ),
                'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes' ),
                'capability_type'     => 'post',
                'has_archive'         => true
            );
            $args = array_merge($args, $this->args);
            register_post_type($this->nombre, $args);
        }

    }


/* Ejemplo */
/* Por defecto todos los parametros son true */

// $productos = new CustomPostType('Producto', 'Productos', 'o', array(
    // "capability_type" => "post",
    // 'supports'  => array( 'title' ),
    // 'taxonomies' => array( 'category', 'post_tag' ),
    // 'menu_position' => 8,
    // 'hierarchical'          => false,
    // 'public'                => false,
    // 'show_ui'               => false,
    // 'show_in_menu'          => false,
    // 'show_in_admin_bar'     => false,
    // 'show_in_nav_menus'     => false,
    // 'can_export'            => false,
    // 'has_archive'           => false,
    // 'exclude_from_search'   => false,
    // 'publicly_queryable'    => false,
    // 'menu_icon'             => 'dashicons-hammer',
    // 'capability_type'       => 'page',
    // 'rewrite' => array('slug' => 'productos','with_front' => false)
// ));