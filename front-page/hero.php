<?php   
    $hero_title = get_theme_mod('hero_title', 'Default Title');
    $hero_telephone = get_theme_mod('hero_telephone', '(514)');
    $hero_button_cta = get_theme_mod('hero_cta_text', '');
    $hero_url_cta = get_theme_mod('hero_cta_link', '');

    // Récupérer les images du carrousel
    $hero_backgrounds = [];
    for ($i = 0; $i < 3; $i++) {
        $hero_backgrounds[] = get_theme_mod('hero_background' . $i, '');
    }
?>

<section class="hero">
    <!-- Carrousel des images -->
    <?php foreach ($hero_backgrounds as $index => $background): ?>
        <?php if (!empty($background)): ?>
            <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($background); ?>')"></div>
        <?php endif; ?>
    <?php endforeach; ?>

    <!-- Boutons radio pour naviguer dans le carrousel -->
    <div class="hero__radio">
        <?php foreach ($hero_backgrounds as $index => $background): ?>
            <?php if (!empty($background)): ?>
                <input class="hero__radio__input" data-id-radio="<?php echo $index; ?>" type="radio" name="carrousel" <?php echo $index === 0 ? 'checked="checked"' : ''; ?>>
            <?php endif; ?>
        <?php endforeach; ?>
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