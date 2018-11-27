<?php
$args = array(
	'taxonomy' => 'location',
	'hide_empty' => false,
);

$context = Timber::get_context();
$context['taxonomies'] = Timber::get_terms( $args );
$templates = array( 'browse.twig' );
echo '<pre>';
print_r(get_page_link());
echo '</pre>';
Timber::render( $templates, $context );