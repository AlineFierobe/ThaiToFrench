<?php get_header(); ?>
<div>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div>
        <h1><?php the_title(); ?></h1>
        <p>
            Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
        </p>
        <div>
            <?php the_content(); ?>
        </div>
        <div>
            <?php comments_template(); ?>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>