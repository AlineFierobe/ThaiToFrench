<!DOCTYPE html>
<html>

<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
</head>

<body>
    <div>
        <header>
            <h1><a><?php bloginfo('name'); ?></a></h1>
            <h2><?php bloginfo('description'); ?></h2>
        </header>