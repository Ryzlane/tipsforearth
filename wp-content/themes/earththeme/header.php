<?php
/**
 * Third party plugins that hijack the theme will call wp_head() to get the header template.
 * We use this to start our output buffer and render into the view/page-plugin.twig template in footer.php
 *
 * If you're not using a plugin that requries this behavior (ones that do include Events Calendar Pro and
 * WooCommerce) you can delete this file and footer.php
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$GLOBALS['timberContext'] = Timber::get_context();
ob_start();

$context['lesbails'] = 'coucou';

// SYNTAXE : wp_nav_menu( array $args = array() )
$args=array(
    'theme_location' => 'header', // nom du slug
    'menu' => 'header_fr', // nom à donner cette occurence du menu
    'menu_class' => 'menu_header', // class à attribuer au menu
    'menu_id' => 'menu_id' // id à attribuer au menu
    // voir les autres arguments possibles sur le codex
);
wp_nav_menu($args);

