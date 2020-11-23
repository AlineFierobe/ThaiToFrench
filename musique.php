<?php
/*
Template Name Posts: Musique
*/
?>
<?php get_header(); ?>

<div class="container-type">
    <h2 class="post-title"><span class="highlight"><?php the_title(); ?></span></h2>
    <div class="repo-music-flex">
        <div class="repo-music-article">
            <?php the_content(); 
            
            get_template_part('repo-loop-music'); ?>

        </div>
        <div class="repo-music-tag">
            <h4>
                recherche par <span class="highlight">#hashtag<span>
            </h4>
            <?php
                // Récupérer la taxonomie dans une variable
                $taxonomyArtist = 'song_artist';
                // Variable avec le get_terms
                $tax_termsArtist = get_terms($taxonomyArtist, array('hide_empty' => false));
                ?>
            <?php
                // La boucle d’affichage
                foreach ($tax_termsArtist as $tax_termArtist) {
                echo '<span class="repo-music-taxo"><a href="' . esc_attr(get_term_link($tax_termArtist, $taxonomyArtist)) . '" title="' . sprintf( __( "Voir tous les … in %s" ), $tax_termArtist->name ) . '" ' . '>' . $tax_termArtist->name.'</a></span>';
                }

                // Récupérer la taxonomie dans une variable
                $taxonomyLabel = 'song_label';
                // Variable avec le get_terms
                $tax_termsLabel = get_terms($taxonomyLabel, array('hide_empty' => false));
                ?>
            <?php
                // La boucle d’affichage
                foreach ($tax_termsLabel as $tax_termLabel) {
                echo '<span class="repo-music-taxo"><a href="' . esc_attr(get_term_link($tax_termLabel, $taxonomyLabel)) . '" title="' . sprintf( __( "Voir tous les … in %s" ), $tax_termLabel->name ) . '" ' . '>' . $tax_termLabel->name.'</a></span>';
                }
                ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>