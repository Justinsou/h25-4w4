<?php
/*
    *Template-part carte
*/
?>

<?php
  // Récupérer l'URL de l'image mise en avant (taille 'large' ou 'full')
  $image_url = '';
  if (has_post_thumbnail()) {
    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
  }
?>

<article class="carte carte--grande" style="background-image: url('<?php echo esc_url($image_url); ?>'); background-size: cover; background-position: center;">
  <div class="carte__contenu">
    <!-- On retire the_post_thumbnail() ici -->
    <h4 class="carte__titre">
      <a href="<?php the_permalink() ?>" class="carte__titre__lien">
        <?php the_title(); ?>
      </a>
    </h4>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(),10, " ... " ); ?></p>
    <?php
      $categories = get_the_category();
      $categorie_actuelle = get_queried_object();

      if (is_category() && $categorie_actuelle) {
        echo '<ul class="post-categories">';
        foreach ($categories as $categorie) {
          if ($categorie->slug != $categorie_actuelle->slug && $categorie->slug != 'populaire') {
            echo '<li><a href="' . get_category_link($categorie->term_id) . '">' . $categorie->name . '</a></li>';
          }
        }
        echo '</ul>';
      } else {
        echo '<ul class="post-categories">';
        foreach ($categories as $categorie) {
          if ($categorie->slug != 'populaire') {
            echo '<li><a href="' . get_category_link($categorie->term_id) . '">' . $categorie->name . '</a></li>';
          }
        }
        echo '</ul>';
      }
    ?>
    <p>Température maximum : <?php the_field('temperature_maximum'); ?> C</p>
  </div>
</article>
