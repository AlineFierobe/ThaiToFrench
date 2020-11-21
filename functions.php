<?php

// ajout du fichier javascript 
function theme_js(){

wp_enqueue_script( 'javascript',
get_template_directory_uri() . '/js/script.js',
array() );
}

add_action( 'wp_footer', 'theme_js' );

// ajout d'un menu
function register_my_menu() {
register_nav_menu('header-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

// ajout des miniatures
add_theme_support( 'post-thumbnails' );

// ajout des Custom Post Type

add_action('init', 'my_custom_init');
function my_custom_init()
{

    /**
    * Post Type: Homepage.
    */
    
    register_post_type(
        'homepage',
        array(
        'label' => 'Homepage',
        'labels' => array(
        'name' => 'Homepage',
        'singular_name' => 'Homepage',
        'all_items' => 'Toutes les pages',
        'add_new_item' => 'Ajouter une page',
        'edit_item' => 'Éditer la page',
        'new_item' => 'Nouvelle page',
        'view_item' => 'Voir la page',
        'search_items' => 'Rechercher parmi les pages',
        'not_found' => 'Pas de page trouvé',
        'not_found_in_trash'=> 'Pas de page dans la corbeille'
        ),
        'public' => true,
        'capability_type' => 'post',
        'query_var' => true,
        'menu_position' => 5,
        'menu_icon' => "dashicons-admin-home",
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'post-formats',
        'custom-fields'
        ),
        'has_archive' => true
        )
        );

    /**
    * Post Type: NEWS.
    */
    
    register_post_type(
        'news',
        array(
        'label' => 'News',
        'labels' => array(
        'name' => 'News',
        'singular_name' => 'News',
        'all_items' => 'Toutes les news',
        'add_new_item' => 'Ajouter une news',
        'edit_item' => 'Éditer la news',
        'new_item' => 'Nouvelle news',
        'view_item' => 'Voir la news',
        'search_items' => 'Rechercher parmi les news',
        'not_found' => 'Pas de news trouvé',
        'not_found_in_trash'=> 'Pas de news dans la corbeille'
        ),
        'public' => true,
        'capability_type' => 'post',
        'query_var' => true,
        'menu_position' => 6,
        'menu_icon' => "dashicons-clipboard",
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'post-formats',
        'custom-fields'
        ),
        'has_archive' => true
        )
        );

    /**
    * Post Type: MUSIC VIDEOS.
    */
    
    register_post_type(
        'videos',
        array(
        'label' => 'Music Videos',
        'labels' => array(
        'name' => 'Music Videos',
        'singular_name' => 'Music Video',
        'all_items' => 'Toutes les trads',
        'add_new_item' => 'Ajouter une trad',
        'edit_item' => 'Éditer la trad',
        'new_item' => 'Nouvelle trad',
        'view_item' => 'Voir la trad',
        'search_items' => 'Rechercher parmi les trad',
        'not_found' => 'Pas de trad trouvé',
        'not_found_in_trash'=> 'Pas de trad dans la corbeille'
        ),
        'public' => true,
        'capability_type' => 'post',
        'query_var' => true,
        'menu_position' => 6,
        'menu_icon' => "dashicons-playlist-video",
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'post-formats',
        'custom-fields'
        ),
        'has_archive' => true
        )
        );
        
}