<?php if (have_posts()) : ?>
<p>
    Hey ! Il y a des Posts !
</p>
<?php while (have_posts()) : the_post(); ?>
<div>
    <h3>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <p>
        Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
    </p>
    <div>
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; ?>
<?php else : ?>
<p class="nothing">
    Il n'y a pas de Post à afficher !
</p>
<?php endif; ?>