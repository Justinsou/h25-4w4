<?php
/*
Template Name: template-pays
*/
get_header();
$pays_background_color = get_theme_mod('pays_background_color', '#f4f4f4');
$pays_emplacement_background_color = get_theme_mod('pays_emplacement_background_color', '#fff');
?>

<main class="pages-pays" style="background: <?php echo esc_attr($pays_background_color); ?>;">
    <h1><?php the_title(); ?></h1>
    <div class="contenu-pays" style="background: <?php echo esc_attr($pays_background_color); ?>;">
        <p>Bienvenue sur notre guide des destinations de rêve ! Que vous soyez passionné de culture, amateur de paysages naturels ou en quête d’aventure, vous trouverez ici l’inspiration pour votre prochain voyage. Parcourez notre sélection de pays et découvrez, pour chacun d’eux, des lieux incontournables, des expériences uniques et des conseils pour vivre un séjour inoubliable. Cliquez sur un pays ci-dessous pour explorer ses trésors cachés, ses traditions et ses plus beaux sites. Préparez-vous à voyager autour du monde sans quitter votre écran !</p>
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if(in_category("galerie")) {
                the_content();
            }  
        endwhile; endif; ?>

    <?php   genere_vague($pays_emplacement_background_color);    ?>

      <div class="pays-emplacement" style="background: <?php echo esc_attr($pays_emplacement_background_color); ?>;">
        <div class="menu-pays categorie__ul"></div>
        <div id="destinations" class="destination__list"></div>
      </div>
        
    </div>
</main>
<body>
<?php get_footer() ?>