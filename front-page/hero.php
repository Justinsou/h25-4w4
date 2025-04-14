<?php   
    $hero_title = get_theme_mod('hero_title', 'Default Title');
    $hero_background = get_theme_mod('hero_background', '');
    $hero_telephone = get_theme_mod('hero_telephone', '(514)');
    $hero_button_cta = get_theme_mod('hero_cta_text', '');
    $hero_url_cta = get_theme_mod('hero_cta_link', '');
?>

<section class="hero">
<!-- style="background-image: url('')" -->
      <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[0] ?>)"></div>
      <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1] ?>)"></div>
      <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2] ?>)"></div>
    
      <div class="hero__radio">
        <input class="hero__radio__input" data-id-radio="0" type="radio" name="carrousel" checked="checked">
        <input class="hero__radio__input" data-id-radio="1" type="radio" name="carrousel">
        <input class="hero__radio__input" data-id-radio="2" type="radio" name="carroussel">
      </div>


        <div class="hero__contenu global">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description">
            <?php bloginfo('description'); ?>
            </p>
            <p class="hero__courriel">
            <?php bloginfo('admin_email'); ?>
            </p>
            <p class="hero__telephone">
            <?php $hero_telephone; ?>
            </p>
            <p class="hero__adresse">
                5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
            </p>
            <p class="hero_auteur">Auteur : <?= $hero_title ;?></p>
            <form action="<?= $hero_url_cta; ?>" method="get">
                <button type="submit" class="hero_button_cta"><?= $hero_button_cta; ?></button>
            </form>
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
            </div>
        </div>
    </section>