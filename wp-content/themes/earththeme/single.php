<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$args_last_articles = array(
	'post_type' => 'post',
	'numberposts' => 4,
	'orderby' => 'post_date',
	'order' => 'DESC',
);

$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;

$context['last_articles'] = Timber::get_posts( $args_last_articles );

Timber::render( array( 'single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig' ), $context );

