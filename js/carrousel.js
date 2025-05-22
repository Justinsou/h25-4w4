(function(){
    console.log("caroussel.js")
    let hero__radio__input = document.querySelectorAll(".hero__radio__input")
    let hero__caroussels = document.querySelectorAll(".hero__caroussel");
    let hero__animation = document.querySelectorAll(".hero__animation");

    console.log("hero__radio__input.length : ",hero__radio__input.length);

    let indexActuel = 0;
    const total = hero__radio__input.length;

    if (hero__radio__input.length === 0) return; // Stoppe le script si aucun input

    function changementAutomatique(index){
        if (!hero__radio__input[index]) return;
        hero__radio__input[index].checked = true;

        // Supprime "active" de toutes les caroussels
        hero__caroussels.forEach(c => c.classList.remove("active"));

        // Ajoute "active" au carrousel correspondant
        if (hero__caroussels[index]) {
            hero__caroussels[index].classList.add("active");
        }

        changementAnimation(indexActuel);
    }

    function changementAnimation(index){
        if (!hero__radio__input[index]) return;
        hero__radio__input[index].checked = true;

        hero__animation.forEach((c, i) => {
            c.classList.remove("hero__animation--active");
            c.style.backgroundColor = "";
            c.style.color = "";
        });
        if (hero__animation[index]) {
            hero__animation[index].classList.add("hero__animation--active");
            // Applique la couleur personnalisée si définie
            if (window.heroCouleurs && window.heroCouleurs[index]) {
                hero__animation[index].style.color = window.heroCouleurs[index];
            }
        }
    }


    // Déclenche une fois au chargement
    changementAutomatique(indexActuel);


    // Change toutes les 5 secondes
    setInterval(() => {
        indexActuel = (indexActuel + 1) % total;
        changementAutomatique(indexActuel);
    }, 5000); 

    // Quand l'utilisateur clique sur un bouton radio
    hero__radio__input.forEach((radio, index) => {
        radio.addEventListener('change', () => {
            indexActuel = index;
            changementAutomatique(index);
        });
    });

})();
