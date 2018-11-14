<?php

$args = array(
	'taxonomy' => 'location',
	'hide_empty' => false,
);

$context = Timber::get_context();
$context['taxonomy'] = Timber::get_terms( $args );
$templates = array( 'taxonomy.twig' );

Timber::render( $templates, $context );
