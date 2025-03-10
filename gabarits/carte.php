<?php
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande" style="background-image: url('<?= the_post_thumbnail('medium'); ?>')">
  <figure class="carte__image">
    
    <?php // the_post_thumbnail('thumbnail') ; ?>
     
    </figure>
  <div class="carte__contenu">
    <?php
        if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail'); }
    ?>    
    <h4 class="carte__titre"><?php the_title(); ?></h4>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(),10, " ... " ); ?></p>
    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">suite ...</a>
    <?php  the_category();  ?>
    <p>Température maximum : <?php the_field('temperature_maximum'); ?> C</p>
  </div>
</article>