<?php get_header(); ?>

<div class="container-type">
    <h3 class="post-title">recherche pour
        <span class="highlight"><?php the_search_query(); ?></span>
    </h3>

    <?php
            get_template_part('loop-search');
            ?>
</div>

<?php get_footer(); ?>