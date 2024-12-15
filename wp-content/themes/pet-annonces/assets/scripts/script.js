
// Filtre des actualités par catégorie
jQuery(function(jQuery){
    jQuery('#filter').submit(function(e){
        e.preventDefault(); // Empêche la soumission standard du formulaire
        let filter = jQuery(this);
        jQuery.ajax({
            url: filter.attr('action'),
            data: filter.serialize(), // Utilise les données du formulaire
            type: 'POST', // Méthode de la requête
            beforeSend: function(xhr){
                filter.find('button').html('<i class="fa-solid fa-circle"></i>'); // Optionnel: feedback visuel
            },
            success: function(data){
                jQuery('#response').html(data); // Met à jour le contenu avec les données retournées
                filter.find('button').html('<i class="fa-solid fa-check"></i>'); // Restaure le texte du bouton
            }
        });
    });
});

// Filtre des annonces par catégorie d'animal

jQuery(function(jQuery){
    jQuery('#filter-form-annonces').submit(function(e){
        e.preventDefault(); // Empêche la soumission standard du formulaire
        let filter = jQuery(this);
        jQuery.ajax({
            url: filter.attr('action'),
            data: filter.serialize(), // Utilise les données du formulaire
            type: 'POST', // Méthode de la requête
            beforeSend: function(xhr){
                filter.find('button').html('<i class="fa-solid fa-circle"></i>'); // Optionnel: feedback visuel
            },
            success: function(data){
                jQuery('#response').html(data); // Met à jour le contenu avec les données retournées
                filter.find('button').html('<i class="fa-solid fa-check"></i>'); // Restaure le texte du bouton
            }
        });
    });
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