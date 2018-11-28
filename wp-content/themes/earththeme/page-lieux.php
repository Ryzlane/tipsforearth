<?php
$args = array(
	'taxonomy' => 'lieux',
	'hide_empty' => false,
);

$context = Timber::get_context();
$context['terms'] = Timber::get_terms( $args );
$templates = array( 'browse.twig' );

Timber::render( $templates, $context );