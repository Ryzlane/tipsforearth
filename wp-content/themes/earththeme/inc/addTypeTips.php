<?php
add_action('init', 'add_tips_item');

function add_tips_item() {
  $post_type = "tips";
  $labels = array(
        'name'               => 'Tips',
        'singular_name'      => 'Tips',
        'all_items'          => 'Tous les tips',
        'add_new'            => 'Ajouter un tips',
        'add_new_item'       => 'Ajouter un tips',
        'edit_item'          => "Editer un tips",
        'new_item'           => 'Nouveau tips',
        'view_item'          => "Voir un tips",
        'search_items'       => 'Rechercher un tips',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Tips parent:',
        'menu_name'          => 'Tips',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail', 'editor', 'revisions', 'categories'),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 3,
        'menu_icon'           => 'dashicons-admin-post',
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
