<div>
    <!-- Bouton RSS -->
    <a href="<?php bloginfo('rss2_url'); ?>">S'abonner au flux RSS</a>
    <!-- Formulaire de recherche -->
    <?php get_search_form(); ?>
    <!-- Archives -->
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
</div>