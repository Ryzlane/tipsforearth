<?php

$context = Timber::get_context();
$tips = Timber::query_post();
$context['tips'] = $tips;

// echo '<pre>';
// print_r($context['tips']);
// echo '</pre>';

Timber::render('single-tips.twig', $context);
