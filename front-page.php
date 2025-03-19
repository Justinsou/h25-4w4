<?php get_header(); ?>
   <?php 
    $hero_title = get_theme_mod('hero_title', 'Default Title');
    $hero_background = get_theme_mod('hero_background', '');
    $hero_button_cta = get_theme_mod('hero_cta_text', '');
    $hero_url_cta = get_theme_mod('hero_cta_link', '');

    require get_template_directory() . '/front-page/hero.php';
    require get_template_directory() . '/front-page/populaire.php';

?> 

    <footer></footer>
    <?php get_footer(); ?>
</body>
</html>
