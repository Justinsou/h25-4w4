(function () {
  function mettreAJourCheckbox() {
    const burgerBtn = document.querySelector(".entete__burger");
    const checkbox = document.querySelector("#chk__menu");
    const navigation = document.querySelector(".entete__navigation");

    if (burgerBtn && checkbox && navigation) {
      // Vérifie si l'écran est en mode mobile ou desktop
      const isMobile = window.innerWidth <= 800;

      // Si l'écran est en mode desktop, décocher la case et réinitialiser le menu
      if (!isMobile) {
        checkbox.checked = false;
        navigation.style.transform = "translateX(0)"; // Affiche le menu en mode desktop
      } else {
        navigation.style.transform = checkbox.checked ? "translateX(0)" : "translateX(-200%)"; // Gère l'état du menu en mode mobile
      }
    }
  }

  function toggleMenu() {
    const checkbox = document.querySelector("#chk__menu");
    const navigation = document.querySelector(".entete__navigation");

    if (checkbox && navigation) {
      if (checkbox.checked) {
        navigation.style.transform = "translateX(0)";
      } else {
        navigation.style.transform = "translateX(-200%)";
      }
    }
  }

  // Exécuter au chargement
  window.addEventListener("load", mettreAJourCheckbox);

  // Exécuter à chaque redimensionnement
  window.addEventListener("resize", mettreAJourCheckbox);

  // Gestion du clic sur le checkbox
  const checkbox = document.querySelector("#chk__menu");
  if (checkbox) {
    checkbox.addEventListener("change", toggleMenu);
  }
})();