<?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $music = new WP_Query( array(
    'post_type' => 'musique',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged'=>$paged
    ) );
?>

<?php if ($music->have_posts()) : ?>
<?php while ($music->have_posts()) : $music->the_post(); ?>
<div class="loop-music">
    <div class="loop-music-thumbnail"
        style="background: url('<?php the_post_thumbnail_url(); ?>') center center/cover;">
    </div>
    <div class="loop-music-details">
        <a href="<?php the_permalink(); ?>">
            <span class="loop-music-details-artist"><?php the_field('artiste'); ?></span> - <span
                class="highlight"><?php the_field('titre'); ?></span>
        </a>
    </div>
    <h3>
        <a href="<?php the_permalink(); ?>">
            <svg id="playDisplay" height="50" viewBox="0 0 511.449 511.449" width="50"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m436.508 74.941c-99.913-99.913-261.639-99.927-361.566 0-99.914 99.912-99.93 261.64 0 361.567 99.913 99.913 261.639 99.927 361.566 0 99.914-99.911 99.929-261.64 0-361.567zm-103.891 197.36-96 74.667c-13.642 10.609-33.893.986-33.893-16.577v-149.333c0-17.439 20.119-27.292 33.893-16.577l96 74.667c10.809 8.408 10.796 24.755 0 33.153z" />
            </svg>
        </a>
    </h3>
</div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>