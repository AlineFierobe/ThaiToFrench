<!DOCTYPE html>
<html>

<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <script src="https://kit.fontawesome.com/4b638f356a.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <h2>
            <svg id="play" height="30" viewBox="0 0 511.449 511.449" width="30" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m436.508 74.941c-99.913-99.913-261.639-99.927-361.566 0-99.914 99.912-99.93 261.64 0 361.567 99.913 99.913 261.639 99.927 361.566 0 99.914-99.911 99.929-261.64 0-361.567zm-103.891 197.36-96 74.667c-13.642 10.609-33.893.986-33.893-16.577v-149.333c0-17.439 20.119-27.292 33.893-16.577l96 74.667c10.809 8.408 10.796 24.755 0 33.153z" />
            </svg>
            <a href="<?php bloginfo('wpurl'); ?>" class=" header-main-title">
                TTF
            </a>
        </h2>
        <nav>
            <svg id="previous" viewBox="0 0 511.448 511.448" width="30" height="30" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m74.941 436.508c99.913 99.913 261.64 99.927 361.567 0 99.913-99.913 99.928-261.64 0-361.567-99.913-99.913-261.639-99.927-361.567 0-99.914 99.911-99.929 261.639 0 361.567zm39.486-197.037 117.333-96c13.695-11.208 34.298-1.419 34.298 16.253v51.685l83.036-67.938c13.569-11.103 34.298-1.538 34.298 16.253v192c0 17.682-20.607 27.456-34.298 16.253l-83.036-67.938v51.685c0 17.682-20.606 27.455-34.298 16.253l-117.333-96c-10.301-8.427-10.231-24.136 0-32.506z" />
            </svg>

            <?php wp_nav_menu ( array ('theme_location' => 'header-menu') ); ?>

            <svg id="next" viewBox="0 0 511.448 511.448" width="30" height="30" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m436.507 74.941c-99.913-99.913-261.64-99.927-361.567 0-99.913 99.913-99.927 261.64 0 361.567 99.913 99.913 261.639 99.928 361.567 0 99.914-99.912 99.93-261.64 0-361.567zm-39.485 197.036-117.333 96c-13.695 11.208-34.298 1.419-34.298-16.253v-51.685l-83.036 67.938c-13.569 11.103-34.298 1.538-34.298-16.253v-192c0-17.682 20.607-27.456 34.298-16.253l83.036 67.938v-51.685c0-17.682 20.606-27.455 34.298-16.253l117.333 96c10.3 8.427 10.23 24.136 0 32.506z" />
            </svg>
        </nav>
    </header>
    <div id="sidebar">
        <!-- Formulaire de recherche -->
        <?php get_search_form(); ?>
    </div>