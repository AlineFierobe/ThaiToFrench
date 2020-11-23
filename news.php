<?php
/*
Template Name Posts: News
*/
?>

<?php get_header(); ?>

<div class="container-type">
    <h2 class="post-title"><span class="highlight"><?php the_title(); ?></span></h2>
    <div class="repo-music-flex">
        <div class="repo-music-article">
            <?php the_content(); 
            
            get_template_part('loop-news'); ?>

        </div>
        <div class="repo-music-tag">
            <h4 class="uppercase">
                Filtrer par <span class="highlight">mois<span>
            </h4>
            <?php
                // Récupérer la taxonomie dans une variable
                $taxonomyMois = 'mois_news';
                // Variable avec le get_terms
                $tax_termsMois = get_terms($taxonomyMois, array('hide_empty' => false));
            ?>
            <ul>
                <?php
                // La boucle d’affichage
                foreach ($tax_termsMois as $tax_termsMois) {
                echo '<li><span><a href="' . esc_attr(get_term_link($tax_termsMois, $taxonomyMois)) . '" title="' . sprintf( __( "Voir tous les … in %s" ), $tax_termsMois->name ) . '" ' . 'class="taxonomy-mois">' . $tax_termsMois->name.'</a></span></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>