// 
// Script permettant d'extraire des destionations de voyage 
// 


(function(){
  console.log("destination.js");
  const categoryId = 2; // Remplacez par l'ID de la catégorie souhaitée
  const domaine = window.location.href; // Correction de l'URL
  const apiUrlBase = `${domaine}wp-json/wp/v2/posts?categories=`;
  const apiUrl = `${apiUrlBase}${categoryId}`;
  console.log(apiUrl);
  // Appeler la fonction pour activer les boutons
  parcourrir_bouton();

function parcourrir_bouton() {
  const categorie_ul_li = document.querySelectorAll('.categorie__ul__li'); // Correction de la classe
  console.log(categorie_ul_li.length);
  categorie_ul_li.forEach(elm => {
    
    elm.addEventListener('click', (e) => {
     
      console.log(elm.tagName);
      console.log(elm.dataset.categorie_id);
    });
  });
}

  fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
          const destinationList = document.querySelector('.destination__list');
          data.forEach(article => {
              const articleElement = document.createElement('div');
              articleElement.innerHTML = `
                  <h3>${article.title.rendered}</h3>
                  <div>${article.excerpt.rendered}</div>
                  <a href="${article.link}">Lire plus</a>
              `;
              destinationList .appendChild(articleElement);
          });
      })
      .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    })()