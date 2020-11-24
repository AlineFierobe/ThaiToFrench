<?php get_header(); ?>

<div class="container-single-music">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <h1 class="post-title"><span class="highlight"><?php the_title(); ?></span></h1>
    <center>
        <iframe id="lecteurYoutube"
            src="https://www.youtube-nocookie.com/embed/<?php the_field('reference_youtube'); ?>?controls=0"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </center>
    <div class="single-music-box">
        <div class="single-music-box-content">
            <?php the_content(); ?>
            <p class="traduction">traduit par : <span><?php the_field('traducteur'); ?></span>
            </p>
        </div>
        <div class="single-music-box-details">
            <h4>informations</h4>
            <p>sortie le <?php the_field('date_de_sortie'); ?></p>
            <p><span class="highlight-vert-clair">label</span> : <?php the_field('label'); ?></p>
            <p><span class="highlight-vert-clair">paroles</span> : <?php the_field('parolier'); ?></p>
            <p><span class="highlight-vert-clair">compositeur</span> : <?php the_field('compositeur'); ?></p>
            <p><span class="highlight-vert-clair">production / arrangement</span> : <?php the_field('producteur'); ?>
            </p>
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