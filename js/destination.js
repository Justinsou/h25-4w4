(function() {
    console.log("destination.js");
    const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.origin + '/4w4_10';
    const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
    console.log(apiUrl);
 
    function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        let activeCategorieId = null;

        categorie__ul__li.forEach(elm => {
            elm.addEventListener('mousedown', (e) => {
                e.preventDefault();

                const categorieId = e.target.dataset.category_id;

                // Si on clique sur la catégorie déjà active
                if (activeCategorieId === categorieId) {
                    const items = document.querySelectorAll('.destination__item');
                    items.forEach(item => {
                        item.classList.add('fade-out');
                    });
                    // Après la transition, on retire les éléments du DOM
                    setTimeout(() => {
                        document.querySelector('.destination__list').innerHTML = '';
                        categorie__ul__li.forEach(button => {
                            button.classList.remove('active');
                        });
                        activeCategorieId = null;
                    }, 400); // 400ms = durée de la transition CSS
                    return;
                }

                // Sinon, comportement normal
                categorie__ul__li.forEach(button => {
                    button.classList.remove('active');
                });

                e.target.classList.add('active');
                activeCategorieId = categorieId;

                fetchArticles(categorieId);
            });
        });
    }
 
    function fetchArticles(categoryId) {
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ''; // Réinitialiser la liste des destinations
 
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add('destination__item', 'fade-in'); // Ajoute fade-in

                    // Crée le titre clickable
                    const titleWrapper = document.createElement('div');
                    titleWrapper.classList.add('destination__title-wrapper'); // Wrapper pour le titre et le bouton

                    const title = document.createElement('h3');
                    title.textContent = article.title.rendered;
                    title.classList.add('destination__titre');

                    const toggleButton = document.createElement('button');
                    toggleButton.textContent = '...';
                    toggleButton.classList.add('destination__toggle-button');

                    // Crée le paragraphe masqué
                    const paragraph = document.createElement('div');
                    paragraph.classList.add('destination__texte');
                    paragraph.innerHTML = article.excerpt.rendered;
                    paragraph.style.display = 'none'; // Texte caché au début

                    // Crée le lien "Lire plus"
                    const link = document.createElement('a');
                    link.href = article.link;
                    link.textContent = 'Lire plus';
                    link.style.display = 'none'; // Ne pas ... le lien au départ

                    // Ajoute les éléments à leur wrapper
                    titleWrapper.appendChild(title);
                    titleWrapper.appendChild(toggleButton);
                    articleElement.appendChild(titleWrapper);
                    articleElement.appendChild(paragraph);
                    articleElement.appendChild(link);
                    destinationList.appendChild(articleElement);

                    // Retire la classe fade-in après l'animation pour permettre le fade-out plus tard
                    setTimeout(() => {
                        articleElement.classList.remove('fade-in');
                    }, 400);
                    
                    toggleButton.addEventListener('click', () => {
                        const isVisible = paragraph.style.display === 'block';
                        if (isVisible) {
                            paragraph.style.display = 'none'; // Cache le texte
                            toggleButton.textContent = '...'; // Change le texte du bouton
                            link.style.display = 'none'; // Cache le lien "Lire plus"
                        } else {
                            paragraph.style.display = 'block'; // Affiche le texte
                            toggleButton.textContent = '...'; // Change le texte du bouton
                            link.style.display = 'inline'; // Affiche le lien "Lire plus"
                        }
                    });

                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
 
    // Charger les articles au chargement de la page
    fetchArticles(categoryId);
 
    // Activer les événements de clic sur les boutons ou liens de catégories
    parcourir_bouton();

    // === AJOUT POUR LE MENU PAYS ET LA RECHERCHE ===

    // Tableau des pays
    const paysList = [
        "France", "États-Unis", "Canada", "Argentine", "Chili",
        "Belgique", "Maroc", "Mexique", "Japon", "Italie",
        "Islande", "Chine", "Grèce", "Suisse"
    ];

    // Génère le menu des pays si l'élément existe
    const menuPays = document.querySelector('.menu-pays');
    if (menuPays) {
        paysList.forEach(pays => {
            const btn = document.createElement('button');
            btn.className = 'btn-pays';
            btn.textContent = pays;
            btn.dataset.pays = pays;
            menuPays.appendChild(btn);
        });

        // Gestion du clic sur un bouton pays
        document.querySelectorAll('.btn-pays').forEach(btn => {
            btn.addEventListener('click', function() {
                const pays = this.dataset.pays;
                fetchDestinationsByPays(pays);
            });
        });
    }

    // Fonction pour charger les destinations par nom de pays (search)
    function fetchDestinationsByPays(pays) {
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?search=${encodeURIComponent(pays)}`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('destinations');
                if (!container) return;
                container.innerHTML = '';
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add('destination__item', 'fade-in');

                    const titleWrapper = document.createElement('div');
                    titleWrapper.classList.add('destination__title-wrapper');

                    const title = document.createElement('h3');
                    title.textContent = article.title.rendered;
                    title.classList.add('destination__titre');

                    const toggleButton = document.createElement('button');
                    toggleButton.textContent = '...';
                    toggleButton.classList.add('destination__toggle-button');

                    const paragraph = document.createElement('div');
                    paragraph.classList.add('destination__texte');
                    paragraph.innerHTML = article.excerpt.rendered;
                    paragraph.style.display = 'none';

                    const link = document.createElement('a');
                    link.href = article.link;
                    link.textContent = 'Lire plus';
                    link.style.display = 'none';

                    titleWrapper.appendChild(title);
                    titleWrapper.appendChild(toggleButton);
                    articleElement.appendChild(titleWrapper);
                    articleElement.appendChild(paragraph);
                    articleElement.appendChild(link);
                    container.appendChild(articleElement);

                    setTimeout(() => {
                        articleElement.classList.remove('fade-in');
                    }, 400);

                    toggleButton.addEventListener('click', () => {
                        const isVisible = paragraph.style.display === 'block';
                        paragraph.style.display = isVisible ? 'none' : 'block';
                        link.style.display = isVisible ? 'none' : 'inline';
                    });
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des destinations:', error));
    }

    // Charger la France par défaut dans #destinations si présent
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('destinations')) {
            fetchDestinationsByPays('France');
        }
    });
})();
