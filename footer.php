<footer>
    <?php 
        $footer_telephone = get_theme_mod('footer_telephone', '(514)');
        $footer_adresse = get_theme_mod('footer_adresse', 'Montréal');
        $footer_courriel = get_theme_mod('footer_courriel', 'courriel');
        $footer_mission = get_theme_mod('footer_mission', 'Mission');
        $footer_background = get_theme_mod('footer_background', '');
    ?> 
    <div class="piedpage global" style="background-image: url('<?= $footer_background; ?>'); background-color: <?= empty($footer_background) ? 'none' : 'initial'; ?>">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <h6>Liens sur le voyage</h6>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    'container_class' => 'footer__menu__externe'
                )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                <h6>Adresse et recherche</h6>
                <div class="piedpage__s1__adresse__coord">
                    <?=  $footer_adresse ;?>
                </div>
                <div class="piedpage__s1__adresse__telephone piedpage__s1__adresse__padding">
                    <?=  $footer_telephone ;?>
                </div>
                <div class="piedpage__s1__adresse__courriel piedpage__s1__adresse__padding">
                    <?=  $footer_courriel ;?>
                </div>
                <div class="piedpage__s1__adresse__recherche piedpage__s1__adresse__padding">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__mission">
                <h6>Mission du club</h6>
                <div class="piedpage__s1__mission_texte">
                <?= $footer_mission ;?>
                </div>
            </div>
        </section>

        <section class="piedpage__s2">
            <div class="piedpage__s2__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
            </div>
            <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'footer__menu__principal'
                )); ?>
        </section>
    </div>
</footer>
<?php wp_footer() ?>