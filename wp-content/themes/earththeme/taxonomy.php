<?php

$args = array(
	'post_type' => 'tips',
	'tax_query' => array(
			array (
					'taxonomy' => 'location',
					'terms' => 'maison',
			)
	),
);


$context = Timber::get_context();
$context['taxonomy'] = Timber::get_posts( $args );
$templates = array( 'taxonomy.twig' );

// echo '<pre>';
// print_r($context['taxonomy']);
// echo '</pre>';

Timber::render( $templates, $context );
