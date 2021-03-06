<?php
add_action('init', 'add_taxonomies');

function add_taxonomies() {

  $taxonomy = 'location';
  $object_type = array('tips', 'post');
  $taxonomy_args = array(
    'label' => __( 'Lieux' ),
    'rewrite' => array( 'slug' => 'location' ),
    'hierarchical' => false,
  );

  register_taxonomy($taxonomy, $object_type, $taxonomy_args);

  $taxonomy = 'type';
  $object_type = array('tips', 'post');
  $taxonomy_args = array(
    'label' => __( 'Types' ),
    'rewrite' => array( 'slug' => 'type' ),
    'hierarchical' => false,
  );

  register_taxonomy($taxonomy, $object_type, $taxonomy_args);
}
