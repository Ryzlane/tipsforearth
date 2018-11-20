<?php

$context = Timber::get_context();
$tips = Timber::query_post();
$context['tips'] = $tips;


Timber::render('single-tips.twig', $context);
