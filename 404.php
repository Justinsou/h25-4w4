<?php get_header(); ?>
<?php 
    $erreur_404_background = get_theme_mod('erreur_404_background', '');
    $Titre_404 = get_theme_mod('Titre_404', '');
    $Texte_404 = get_theme_mod('Texte_404', '');
    $Bouton_404 = get_theme_mod('Bouton_404', '');
 ?>

<main >
  <section class="erreur_404"  style="background-image: url('<?= $erreur_404_background ?>')">
    <div class="encadrer">
      <div class="titre" ><h1><?= $Titre_404 ?></h1></div>
      <div class="texte" ><p><?= $Texte_404 ?></p></div>
      <p class="bouton_acceuil"> 
        <a href="<?php echo home_url(); ?>"><?= $Bouton_404 ?></a> <!-- Bouton avec lien vers l'accueil -->
      </p>

      <div class="erreur_404__navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'erreur_404',
                    'container' => 'nav',
                    'container_class' => 'erreur404__menu'
                )); ?>
            </div> 
    </div>
   
  </section>
</main>

<?php get_footer(); ?>
</body>
</html>