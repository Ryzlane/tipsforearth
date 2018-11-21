<?php


$args_tips = array(
	'post_type' => 'tips',
	'tax_query' => array(
			array (
					'taxonomy' => 'location',
					'terms' => 'maison',
			)
	),
);

$args_taxonomy = array(
	'taxonomy' => 'location',
	'hide_empty' => false,
);

$context = Timber::get_context();
$context['tips'] = Timber::get_posts( $args_tips );
$context['taxonomy'] = Timber::get_term(2, 'location');
$templates = array( 'taxonomy.twig' );

echo '<pre>';
print_r($context);
echo '</pre>';

Timber::render( $templates, $context );
