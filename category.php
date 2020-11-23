<?php get_header(); ?>
<div>
    <h1>Catégorie <span class="highlight"><?php single_cat_title(); ?></span></h1>
    <?php get_template_part('loop-search'); ?>
</div>
<?php get_footer(); ?>