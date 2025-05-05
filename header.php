<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <!-- <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css"> -->
    <?php wp_head()?>
    
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
            <input type="checkbox" id="maCheckbox" aria-label="menu-burger">
            <label for="maCheckbox">
                <div class="trait"></div>
                <div class="trait"></div>
                <div class="trait"></div>
            </label>
            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
                <?php  get_search_form() ?>
                <!-- <form class="recherche">
                    <input type="search" placeholder="Rechercher" class="recherche__input">
                    <img class="recherche__img"  src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
                </form> -->
            </div>
        </div>
    </header>