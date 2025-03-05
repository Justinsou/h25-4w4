<footer>

  <div class="piedpage global">

  <section class="piedpage__s1">

    <div class="pied__s1__externe">
      <?php wp_nav_menu(array(
        "menu" => "externe",
        "container" => "nav",
      )); ?>
    </div>
    <div class="pied__s1__adresse">
      <div class="pied__s1__adresse__coord">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit minus voluptates veritatis ratione, amet iusto corporis et neque aliquam consectetur similique maiores laudantium sapiente id natus optio mollitia non voluptatem.
      <div class="pied__s1__adresse_recherche">
        <?php get_search_form(); ?>
    </div>
    <div class="piedpage__s1__description"></div>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, officia similique non, ex unde consequatur quasi provident explicabo at beatae nostrum autem vitae harum ipsa quo eos, perspiciatis culpa nemo?
  </section>

  <section class="piedpage__s2"></section>
  <section class="piedpage__s3"></section>



  </div>
</footer>
<?php wp_footer(); ?>
