
// Filtre des actualités par catégorie
document.addEventListener('DOMContentLoaded', function() {
    const filterForm = document.getElementById('filter');

    if (filterForm) {
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Empêche la soumission standard du formulaire

            // Récupère l'URL d'action et les données du formulaire
            const actionUrl = filterForm.getAttribute('action');
            const formData = new FormData(filterForm);

            // Sélectionne le bouton du formulaire
            const submitButton = filterForm.querySelector('button');
            // Optionnel : feedback visuel lors du "beforeSend"
            if (submitButton) {
                submitButton.innerHTML = '<i class="fa-solid fa-circle"></i>';
            }

            // Envoie la requête AJAX en POST
            fetch(actionUrl, {
                method: 'POST',
                body: formData
            })
                .then(response => response.text()) // Suppose que la réponse est du HTML
                .then(data => {
                    // Met à jour la section #response avec les données retournées
                    const responseContainer = document.getElementById('response');
                    if (responseContainer) {
                        responseContainer.innerHTML = data;
                    }
                    // Restaure le texte du bouton
                    if (submitButton) {
                        submitButton.innerHTML = '<i class="fa-solid fa-check"></i>';
                    }
                })
                .catch(error => {
                    if (submitButton) {
                        submitButton.innerHTML = 'Réessayer';
                    }
                });
        });
    }
});



// Filtre des annonces par catégorie d'animal
document.addEventListener('DOMContentLoaded', function() {
    const filterForm = document.getElementById('filter-form-annonces');
    if (filterForm) {
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Empêche la soumission standard du formulaire

            const actionUrl = filterForm.getAttribute('action');
            const formData = new FormData(filterForm);

            // Récupérer le bouton pour le feedback visuel
            const submitButton = filterForm.querySelector('button');
            if (submitButton) {
                submitButton.innerHTML = '<i class="fa-solid fa-circle"></i>';
            }

            // Requête en POST via fetch()
            fetch(actionUrl, {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    // Met à jour la zone #response avec les données retournées
                    const responseContainer = document.getElementById('response');
                    if (responseContainer) {
                        responseContainer.innerHTML = data;
                    }
                    // Restaure le texte du bouton
                    if (submitButton) {
                        submitButton.innerHTML = '<i class="fa-solid fa-check"></i>';
                    }
                })
                .catch(error => {
                    if (submitButton) {
                        submitButton.innerHTML = 'Réessayer';
                    }
                });
        });
    }
});




// Système pour ouvrir et fermer les cartes de la page soutenir

let participationCards = document.querySelectorAll('.participation-card');
for (let i = 0; i < participationCards.length; i++) {
    participationCards[i].addEventListener('click', function() {
        // Quand on clique sur la card, la div enfant avec la classe .participation-card-details s'ouvre ou se ferme
        this.querySelector('.participation-card-details').classList.toggle('hidden');
        if (this.querySelector('.participation-card-details').classList.contains('hidden')) {
            this.style.height = '300px';
            this.classList.remove('open');
        } else {
            this.style.height = 'auto';
            this.classList.add('open');
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    applySubjectSelection();    const forms = document.querySelectorAll('.wpcf7-form');
    forms.forEach(form => {
        form.addEventListener('wpcf7reset', function(e) {
            applySubjectSelection();
        });
    });
});
function applySubjectSelection() {
    const params = new URLSearchParams(window.location.search);
    const subject = params.get('your-subject');
    if (subject) {
        const selectEl = document.querySelector('select[name="your-subject"]');
        if (selectEl) {
            [...selectEl.options].some(option => {
                if (option.value === subject) {
                    option.selected = true;
                    return true; // Stoppe le .some
                }
                return false;
            });
        }
    }
}


document.addEventListener('DOMContentLoaded', function() {
    const mainImage = document.querySelector('.animal-main-image .main-image');
    const thumbnails = document.querySelectorAll('.animal-thumbnails .thumbnail');

    thumbnails.forEach(function(thumbnail) {
        thumbnail.addEventListener('click', function() {
            const oldSrc = mainImage.src;
            const oldAlt = mainImage.alt;

            mainImage.src = thumbnail.src;
            mainImage.alt = thumbnail.alt;

            thumbnail.src = oldSrc;
            thumbnail.alt = oldAlt;
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    const items = document.querySelectorAll('.carousel-item');
    const nextButton = document.querySelector('.carousel-button.next');
    const prevButton = document.querySelector('.carousel-button.prev');
    const visibleItems = 3; // Nombre de cartes visibles
    let currentIndex = 0;

    // Vérifier si des items existent
    if (items.length === 0) {
        console.warn('Aucun item trouvé dans le carrousel.');
        return; // Arrêter le script si aucun item
    }

    // Calcul de la largeur d'un item (ajout de 16px pour le gap)
    const itemWidth = items[0].offsetWidth + 16;

    // Fonction pour mettre à jour la position du carrousel
    const updateCarousel = () => {
        const offset = currentIndex * itemWidth;
        track.style.transform = `translateX(-${offset}px)`;
        console.log('Current Index:', currentIndex); // Log du currentIndex pour débogage
    };

    // Bouton suivant
    nextButton.addEventListener('click', () => {
        if (currentIndex < items.length - visibleItems) {
            currentIndex++;
        } else {
            currentIndex = 0; // Revenir au début
        }
        updateCarousel();
    });

    // Bouton précédent
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = items.length - visibleItems; // Aller à la fin
        }
        updateCarousel();
    });

    // Défilement automatique
    let autoScroll = setInterval(() => {
        if (currentIndex < items.length - visibleItems) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    }, 3000);

    // Pause le défilement au survol
    [nextButton, prevButton, track].forEach(element => {
        element.addEventListener('mouseenter', () => clearInterval(autoScroll));
        element.addEventListener('mouseleave', () => {
            autoScroll = setInterval(() => {
                if (currentIndex < items.length - visibleItems) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateCarousel();
            }, 3000);
        });
    });

    // Initialisation du carrousel
    updateCarousel();
});