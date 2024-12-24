<?php get_header();

/**
 * Template Name: Formulaire de contact
 */

if(get_field('la_page_a-t-elle_une_banniere_')){
    get_template_part('template-parts/_banniere');
}

if(get_field('la_page_a-t-elle_des_cartes_de_service_')){
    get_template_part('template-parts/_service_cards');
}

if (get_field('la_page_presente-t-elle_des_statistiques_')) {
    get_template_part('template-parts/_statistiques');
}

if (get_field('la_page_a-t-elle_des_cartes_de_procedure_')){
    get_template_part('template-parts/_procedure_cards');
}

?>
    <div class="container">
        <?php
        echo get_the_content();
        ?>
    </div>
<?php

get_template_part('template-parts/_contact');

if (get_field('animaux_mis_en_avant')['la_page_a-t-elle_des_animaux_mis_en_avant_']){
    get_template_part('template-parts/_annonces_mises_en_avant');
}

if (get_field('dernieres_actualites')['la_page_presente-t-elle_les_dernieres_actualites_']){
    get_template_part('template-parts/_dernieres_actus');
}

if (get_field('carrousel')['la_page_presente-t-elle_un_carrousel_']){
    get_template_part('template-parts/_carrousel');
}

if (get_field('la_page_a-t-elle_un_bouton_pour_acceder_aux_dons_')){
    get_template_part('template-parts/_bouton_dons');
}

get_footer();

?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // On récupère la valeur de `subject` dans l'URL
        const params = new URLSearchParams(window.location.search);
        const subject = params.get('your-subject'); // ex. ?subject=test => "test"
        console.log(subject);
        // Si un paramètre 'subject' existe
        if (subject) {
            // Sélectionner le <select> (qui a la classe subject-select)
            const selectEl = document.querySelector('select[name="your-subject"]');

            if (selectEl) {
                // On parcourt les options pour trouver celle qui a la même value
                [...selectEl.options].forEach(option => {
                    if (option.value === subject) {
                        option.selected = true;
                    }
                });
            }
        }
    });
</script>
