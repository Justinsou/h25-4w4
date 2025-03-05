<?php get_header(); ?>
  
    <h1>------------- single-post.php -----------------</h1>
    <section class="populaire">
      <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>

          <?php 
            if (has_post_thumbnail()) {
            the_post_thumbnail('large'); }
          ?>

            <h2><?php the_title(); ?></h2>
            <div><?php echo wp_trim_words(get_the_content(),10, "..."); ?></div>
        </article>
        <h2><?php the_title(); ?></h2>
        <h2><?php the_content(); ?></h2>
        <?php endwhile; endif; ?>
      </div>
    </section>

    <?php get_footer(); ?>
    

</body>
</html>