<?php
add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'tips-thumb', 100, 200, true );
    add_image_size( 'post-thumb', 529, 270, true );
}
