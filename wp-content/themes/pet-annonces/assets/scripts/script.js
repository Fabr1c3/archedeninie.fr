// Dans ton script principal
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.wpcf7-form');
    forms.forEach(form => {
        form.addEventListener('wpcf7reset', function(e) {
            console.log('[MON CODE] wpcf7reset TRIGGERED');
        });
    });
});




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
                    console.error('Erreur:', error);
                    // En cas d'erreur, on peut éventuellement restaurer le texte du bouton
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
                    console.error('Erreur:', error);
                    // En cas d'erreur, on peut restaurer ou changer l'affichage du bouton
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
            console.log('wpcf7reset déclenché sur:', form);
            // Ici, ton code pour re-sélectionner l’option, etc.
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