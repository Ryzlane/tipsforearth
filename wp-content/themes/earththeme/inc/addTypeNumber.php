<?php
add_action('init', 'add_number_item');

function add_number_item() {
  $post_type = "number";
  $labels = array(
        'name'               => 'Nombres',
        'singular_name'      => 'Nombre',
        'all_items'          => 'Tous les nombres',
        'add_new'            => 'Ajouter un nombres',
        'add_new_item'       => 'Ajouter un nombres',
        'edit_item'          => "Editer un nombres",
        'new_item'           => 'Nouveau nombres',
        'view_item'          => "Voir un nombres",
        'search_items'       => 'Rechercher un nombre',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Nombre parent:',
        'menu_name'          => 'Nombres',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-image-filter',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );
}
