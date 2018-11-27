<?php


$context = Timber::get_context();
$context['term'] = new TimberTerm();

$test = $context['term'];

$args_tips = array(
	'post_type' => 'tips',
	'tax_query' => array(
			array (
					'taxonomy' => $context['term']->taxonomy,
					'terms' => $context['term']->slug,
			)
	),
);


$context['tips'] = Timber::get_posts( $args_tips );

$templates = array( 'taxonomy.twig' );
Timber::render( $templates, $context );