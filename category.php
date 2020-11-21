<?php get_header(); ?>
<div>
    <h1>Catégorie : <?php single_cat_title(); ?></h1>
    <?php get_template_part('loop'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>