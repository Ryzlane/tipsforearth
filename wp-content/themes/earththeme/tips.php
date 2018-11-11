<?php

$context = Timber::get_context();
$context['tips'] = Timber::get_posts( array( 'post_type' => 'tips', 'posts_per_page' => -1 ) );

Timber::render( array( 'tips.twig' ), $context );