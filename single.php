<?php get_header(); ?>

<div class="container-type">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h1 class="post-title"><span class="highlight"><?php the_title(); ?></span></h1>
    <div class="container-type-content">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>