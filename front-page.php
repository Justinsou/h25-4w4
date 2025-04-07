<?php get_header(); ?>

<?php 

    require get_template_directory() . '/front-page/hero.php';
    require get_template_directory() . '/front-page/populaire.php';

?> 

<!-- ////////////////////////////// section rest-api /////////////////////////// -->
    <section class="destination">
    <?php categories_liste("destination") ?>
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>

    <?php get_footer(); ?>
</body>
</html>
