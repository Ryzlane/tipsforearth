<?php

$context = Timber::get_context();
$tips = Timber::query_post();
$context['tips'] = $tips;

$args_custom_taxonomies = array(
	'public'   => true,
  '_builtin' => false
  
); 

$custom_taxonomies = get_taxonomies($args_custom_taxonomies);
$terms = [];

foreach( $custom_taxonomies as $taxonomy ){
	$terms[] = get_the_terms($context['tips'], $taxonomy);
}

$context['terms'] = $terms;

Timber::render('single-tips.twig', $context);
