<?php
add_action('init', 'add_category_card_item');

function add_category_card_item() {
  $post_type = "card-category";
  $labels = array(
        'name'               => 'Cartes catégories',
        'singular_name'      => 'Carte catégorie',
        'all_items'          => 'Toutes les cartes catégories',
        'add_new'            => 'Ajouter une carte catégorie',
        'add_new_item'       => 'Ajouter une carte catégorie',
        'edit_item'          => "Editer une carte catégorie",
        'new_item'           => 'Nouvelle carte catégorie',
        'view_item'          => "Voir une carte catégorie",
        'search_items'       => 'Rechercher une carte catégorie',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Catégorie parent:',
        'menu_name'          => 'Catégories',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title', 'thumbnail', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 3,
        'menu_icon'           => 'dashicons-admin-page',
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
