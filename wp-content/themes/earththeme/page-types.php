<?php
$args = array(
	'taxonomy' => 'types',
	'hide_empty' => false,
);

$context = Timber::get_context();
$context['taxonomies'] = Timber::get_terms( $args );
$templates = array( 'browse.twig' );

Timber::render( $templates, $context );