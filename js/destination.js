// // 
// // Script permettant d'extraire des destionations de voyage 
// // 


// (function(){
//   console.log("destination.js");
//   const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
//   const domaine = window.location.href; // Correction de l'URL
//   const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
//   console.log(apiUrl);

  
  
//   // let apiUrl = `${apiUrlBase}${categoryId}`;
//   // console.log(apiUrl);
  
  
//   // Appeler la fonction pour activer les boutons
//   // parcourrir_bouton();

// // function parcourrir_bouton() {
// //   const categorie_ul_li = document.querySelectorAll('.categorie__ul__li'); // Correction de la classe
// //   console.log(categorie_ul_li.length);
// //   categorie_ul_li.forEach(elm => {
    
// //     elm.addEventListener('click', (e) => {
     
// //       console.log(elm.tagName);
// //       console.log(elm.dataset.categorie_id);

// //       apiUrl = `${apiUrlBase}${elm.dataset.categorie_id}`;
// //       console.log(apiUrl);
      
// //       MonFetch(apiUrl);
// //     });
// //   });
// // }


// fetch(apiUrl)
// .then(response => response.json())
// .then(data => {
//     const destinationList = document.querySelector('.destination__list');
//     data.forEach(article => {
//         const articleElement = document.createElement('div');
//         console.log(article.title.rendered)
//         // <div>${article.excerpt.rendered}</div>
//         articleElement.innerHTML = `
//             <h3>${article.title.rendered}</h3>
//             <p>${article.excerpt.rendered}</p>
//             <a href="${article.link}">Lire plus</a>
//         `;
//         destinationList .appendChild(articleElement);
//     });
// })
// .catch(error => console.error('Erreur lors de la récupération des articles:', error));
// })()

    /**
 *  Script js permettant d'extraite des destinations de voyage
 */
(function(){
  // console.log("destination.js")
  const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
  const domaine = window.location.href
  let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

  parcourir_bouton();

function parcourir_bouton(){
  const categorie__ul__li = document.querySelectorAll(".categorie__ul__li")
  console.log("categorie__ul__li.length = ", categorie__ul__li.length)
  categorie__ul__li.forEach(elm => {
      elm.addEventListener('mousedown', function(){
          // console.log(elm.tagName)
          console.log("elm.dataset.category_id = " , elm.dataset.category_id)
          const category_id = elm.dataset.category_id
           apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${category_id}`;
          MonFetch(apiUrl);
      })
  })

}

function MonFetch(apiUrl){
  fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
        
          const destinationList = document.querySelector('.destination__list');
          destinationList.innerHTML = ''; // Réinitialiser la liste avant d'ajouter de nouveaux articles
          data.forEach(article => {
              const articleElement = document.createElement('div');
              // console.log(article.title.rendered)
              // <div>${article.excerpt.rendered}</div>
              articleElement.innerHTML = `
                  <h3>${article.title.rendered}</h3>
                  <p>${article.excerpt.rendered}</p>
                  <a href="${article.link}">Lire plus</a>
              `;
              destinationList .appendChild(articleElement);
          });
      })
      .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
  })()