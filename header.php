<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" />
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <?php wp_head() ?>
</head>
<body>
    <header>
        <div class="entete">
        <a href="<?php echo home_url(); ?>" class="entete__logo">
        <?php
        // Affiche le logo du site s'il est défini dans le personnalisateur
        // get_theme_mod() est une fonction de WordPress qui permet 
        // de récupérer les valeurs des options définies 
        // dans le personnalisateur de thème
        // 'custom_logo' est l'identifiant de l'option du logo dans le 
        // customizer
        $logo_id = get_theme_mod('custom_logo');
        if ($logo_id) {
        echo wp_get_attachment_image($logo_id, 'logo', false, array(
            'class' => 'custom-logo',
            'alt' => get_bloginfo('name'),
            ));
        }
        ?>
        </a>
            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
                <?php get_search_form() ?>
              
            </div> <!-- fin entete__navigation  -->
            
            <span class="material-symbols-outlined">
                menu
                </span>
        </div>
    </header>