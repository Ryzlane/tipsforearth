<?php

$args_last_post = array(
	'post_type' => 'post',
	'orderby' => 'post_date',
	'order' => 'DESC',
);

$args_all_posts = array(
	'post_type' => 'post',
	'orderby' => 'post_date',
	'posts_by_page' => 4,
	'order' => 'DESC',
	'offset' => 1
);

$context = Timber::get_context();
$context['featured_post'] = Timber::query_post( $args_last_post );
$context['all_posts'] = Timber::get_posts( $args_all_posts );
$templates = array( 'page-blog.twig' );

Timber::render( $templates, $context );
