<?php

$args = array(
	'tax_query' => array(
		'taxonomy_name' => 'lieux',
	)
);

$context = Timber::get_context();
$context['taxonomy'] = Timber::query_post( $args );
$templates = array( 'taxonomy.twig' );

Timber::render( $templates, $context );
