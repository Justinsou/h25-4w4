(function () {
  console.log("carrousel.js");

  const heroRadios = document.querySelectorAll(".hero__radio__input");
  const heroCarrousels = document.querySelectorAll(".hero__carrousel");
  let currentIndex = 0;

  // Fonction pour afficher l'image correspondant au bouton radio sélectionné
  function updateCarrousel(index) {
    heroCarrousels.forEach((carrousel, i) => {
      carrousel.style.display = i === index ? "block" : "none";
    });
    heroRadios[index].checked = true;
  }

  // Ajout d'un événement sur chaque bouton radio
  heroRadios.forEach((radio, index) => {
    radio.addEventListener("change", () => {
      if (radio.checked) {
        currentIndex = index;
        updateCarrousel(index);
      }
    });
  });

  // Initialisation : afficher la première image
  updateCarrousel(0);

  // Animation automatique
  setInterval(() => {
    currentIndex = (currentIndex + 1) % heroCarrousels.length;
    updateCarrousel(currentIndex);
  }, 5000);
})();