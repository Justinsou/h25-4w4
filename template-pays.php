<?php
/*
Template Name: template-pays
*/
get_header();
?>

<main class="site-main">
    <h1><?php the_title(); ?></h1>
    <div class="contenu-pays">
        <p>Découvrez les plus belles destinations de voyages par pays. Cliquez sur un pays pour explorer ses merveilles.</p>
         <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if(in_category("galerie")) {
                the_content();
            }  
        endwhile; endif; // <-- Ajout de cette ligne pour fermer la boucle ?>

        <div id="destinations" class="destinations-container"></div>

        <?php
        genere_vague($footer_couleur);
        ?>
    </div>
</main>

<?php get_footer(); ?>