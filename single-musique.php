<?php get_header(); ?>

<div class="single-music">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <h1 class="post-title"><span class="highlight"><?php the_title(); ?></span></h1>
    <div class="single-music-box">
        <div class="single-music-box-content">
            <?php the_content(); ?>
            <p class="traduction">traduit par : <span><?php the_field('traducteur'); ?></span>
            </p>
        </div>
        <div class="single-music-box-details">
            <h4>informations</h4>
            <p>label : <?php the_field('label'); ?></p>
            <p>sortie le <?php the_field('date_de_sortie'); ?></p>
            <p>paroles : <?php the_field('parolier'); ?></p>
            <p>compositeur : <?php the_field('compositeur'); ?></p>
            <p>producteur : <?php the_field('producteur'); ?></p>
            <p>
                <a href="<?php the_field('lien_officiel_du_clip'); ?>" class="single-music-lien-off" target="_blank">
                    clip officiel
                </a>
            </p>
        </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>