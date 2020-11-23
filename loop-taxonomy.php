<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="repo-loop-music">
    <a href="<?php the_permalink(); ?>">
        <svg id="repoPlay" height="30" viewBox="0 0 511.449 511.449" width="30" xmlns="http://www.w3.org/2000/svg">
            <path
                d="m436.508 74.941c-99.913-99.913-261.639-99.927-361.566 0-99.914 99.912-99.93 261.64 0 361.567 99.913 99.913 261.639 99.927 361.566 0 99.914-99.911 99.929-261.64 0-361.567zm-103.891 197.36-96 74.667c-13.642 10.609-33.893.986-33.893-16.577v-149.333c0-17.439 20.119-27.292 33.893-16.577l96 74.667c10.809 8.408 10.796 24.755 0 33.153z" />
        </svg>
        <span class="loop-music-details-artist"><?php the_field('artiste'); ?></span> - <span
            class="title-highlight"><?php the_field('titre'); ?></span>
    </a>
</div>
<?php endwhile; ?>
<?php else : ?>
<p class="nothing">
    Aucun post ne correspond à ta recherche.
</p>
<?php endif; ?>