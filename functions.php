<?php
require_once(get_template_directory(). '/template-parts/navbar.php');

function theme1_add_js_css()
{
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme1_add_js_css');

// registrar imagen destacada
if ( function_exists( 'add_theme_support' ) )
{
    add_theme_support( 'post-thumbnails' );
}

add_theme_support( 'title-tag' );


