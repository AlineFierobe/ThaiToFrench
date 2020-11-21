<?php

// add customized Javascript to our theme
function theme_js(){

wp_enqueue_script( 'javascript',
get_template_directory_uri() . '/js/script.js',
array() );
}

add_action( 'wp_footer', 'theme_js' );

// add menu
function register_my_menu() {
register_nav_menu('header-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

// add thumbnail
add_theme_support( 'post-thumbnails' );