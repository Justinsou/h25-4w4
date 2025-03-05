<?php get_header(); ?>
    <section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">Voyager autrement avec BioAiles</h1>
            <p class="hero__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quo, veritatis eum incidunt earum ex libero officia nemo repudiandae molestias, vitae omnis magnam exercitationem provident ratione impedit vel culpa consequatur.
            </p>
            <p class="hero__courriel">
                <a href="#">info@cmaisonneuve.qc.ca</a>
            </p>
            <p class="hero__adresse">
                5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
            </p>
            <button>S'INSCRIRE</button>
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
            </div>
        </div>
    </section>
    <article>
        <div class="form-container">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" placeholder="Écrivez votre nom">
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" placeholder="Écrivez votre prénom">
            </div>

            <div class="form-group">
                <label for="courriel">Courriel</label>
                <input type="email" id="courriel" placeholder="Écrivez votre courriel">
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" placeholder="Écrivez votre téléphone">
            </div>
            <div class="form-group">
                <label for="inscription">Pour s'inscrire</label>
                <input type="tel" id="inscription" placeholder="S'INSCRIRE">
            </div>
        </div>
    </article>

    <section class="populaire">
      <div class="global">

        <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            } else {    ?>
                <?php get_template_part( 'gabarits/carte' ); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
      </div>
    </section>
    
    <footer></footer>

    
    <script>
        function toggleMenu() {
            var menu = document.querySelector(".menu");
            menu.classList.toggle("active");
            console.log("toggleMenu");
        }

        document.getElementById("menu__burger").addEventListener("click", toggleMenu);
    </script>

    <?php get_footer(); ?>
    
</body>
</html>