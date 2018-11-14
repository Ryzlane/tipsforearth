<?php

$args = array(
	'tax_query' => array(
		'taxonomy_name' => 'location',
	)
);

$context = Timber::get_context();
$context['taxonomy'] = Timber::get_terms( $args );
$templates = array( 'taxonomy.twig' );

echo '<pre>';
print_r($context['taxonomy']);
echo '</pre>';

Timber::render( $templates, $context );
