<?php
add_action('init', 'add_taxonomies');

function add_taxonomies() {

  $taxonomy = 'lieux';
  $object_type = array('tips');
  $taxonomy_args = array(
    'label' => __( 'Lieux' ),
    'rewrite' => array( 'slug' => 'lieux' ),
    'hierarchical' => false,
  );

  register_taxonomy($taxonomy, $object_type, $taxonomy_args);

  $taxonomy = 'types';
  $object_type = array('tips');
  $taxonomy_args = array(
    'label' => __( 'Types' ),
    'rewrite' => array( 'slug' => 'type' ),
    'hierarchical' => false,
  );

  register_taxonomy($taxonomy, $object_type, $taxonomy_args);
}
