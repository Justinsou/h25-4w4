<?php get_header(); ?>
<?php 
    $erreur_404_background = get_theme_mod('erreur_404_background', '');
    $Texte_404 = get_theme_mod('Texte_404', '');
    $Bouton_404 = get_theme_mod('Bouton_404', '');
 ?>

<main >
  <p class="erreur_barre erreur_barre_haut ">//////////////////////////////////////////////////////////////////////////////////////////</p>
  <section class="erreur_404"  style="background-image: url('<?= $erreur_404_background ?>')">
    <h1>Erreur 404</h1>
    <h3><?= $Texte_404 ?></h3>
    <p class="bouton_acceuil"> 
      <a href="<?php echo home_url(); ?>"><?= $Bouton_404 ?></a> <!-- Bouton avec lien vers l'accueil -->
    </p>
  </section>
  <p class="erreur_barre erreur_barre_bas">//////////////////////////////////////////////////////////////////////////////////////////</p>
</main>

<?php get_footer(); ?>
</body>
</html>