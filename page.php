<?php get_header(); ?>
<div>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div>
        <h1><?php the_title(); ?></h1>
        <div>
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>