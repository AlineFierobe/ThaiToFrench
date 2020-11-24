<?php

// ajout du fichier javascript 
function theme_js(){

wp_enqueue_script( 'javascript',
get_template_directory_uri() . '/js/script.js',
array() );
}

add_action( 'wp_footer', 'theme_js' );

// ajout de la feuille CSS pour le responsive
wp_register_style('mobile', get_template_directory_uri() . '/style-mobile.css', array(), '1.0', 'all');
wp_enqueue_style('mobile'); // Enqueue it!


// ajout d'un menu
function register_my_menu() {
register_nav_menu('header-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

// ajout des miniatures
add_theme_support( 'post-thumbnails' );

// ajout du format de post personnalisé
function my_cpt_post_types( $post_types ) {
$post_types[] = 'test';
return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );