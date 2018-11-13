<?php

$args_last_tips = array(
	'post_type' => 'tips',
	'orderby' => 'post_date',
	'order' => 'DESC',
);

$args_last_numbers = array(
	'post_type' => 'number',
	'numberposts' => 3,
	'orderby' => 'post_date',
	'order' => 'DESC',
);

$context = Timber::get_context();
$context['last_tips'] = Timber::query_post( $args_last_tips );
$context['numbers'] = Timber::get_posts( $args_last_numbers );
$templates = array( 'index.twig' );

if ( is_home() ) {
	array_unshift( $templates, 'front-page.twig', 'home.twig' );
}
Timber::render( $templates, $context );
