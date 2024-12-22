<?php
$id_page_courante = get_the_ID();

$texte_bouton = get_field('texte_du_bouton_animaux_mis_en_avant');
// Arguments de la première requête pour les annonces avec la méta "mis_en_avant" à "on"
    $args_mise_en_avant = array(
        'post_type' => 'annonce', // Type de publication personnalisé
        'posts_per_page' => 3, // Nombre maximal d'annonces à récupérer
        'post_status' => 'publish', // Uniquement les posts publiés
        'meta_query' => [
                'relation' => 'AND',
            [
                'key' => 'annonce_mise_en_avant_', // Clé de la méta
                'compare' => '=',
                'value' => '1', // Valeur de la méta
            ],
            [
                'key' => 'annonce_active_',
                'compare' => '=',
                'value' => '1',
            ]
        ],
        'orderby' => 'rand', // Ordonner aléatoirement
    );

    // Requête WP_Query pour les annonces avec la méta "mis_en_avant" à true
    $query_mise_en_avant = new WP_Query($args_mise_en_avant);

    // Si le nombre d'annonces obtenues est inférieur à trois, ne pas afficher la section
    if ($query_mise_en_avant->post_count == 3):
        // Afficher les annonces
        ?>
<section class="adopt-pet ">
    <div class="w-100 m-auto">
        <div class="m-auto ">
            <div class="row align-items-center pb-5 mt-5">
                <div class="mb-2">
                    <h2 class="text-center kids-zona"><?= get_field('animaux_mis_en_avant')['animaux_mis_en_avant_titre_de_la_section']?></h2>
                </div>
                <?php
                    $sousTitre = get_field('animaux_mis_en_avant')['animaux_mis_en_avant_sous_titre_de_la_section'];
                if ($sousTitre): ?>
                    <h3 class="text-center w-75 m-auto"><?= $sousTitre ?></h3>
                <?php endif; ?>
            </div>


        <div class="container-adoption p-lg-3 w-100 w-lg-75 m-auto  " >
            <div class="row w-100 w-lg-75 m-auto">
                <?php
                    foreach ($query_mise_en_avant->posts as $post):
                        get_template_part('template-parts/_annonce_card', null, array(
                                'post' => $post,
                            ));
                    endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <?php if (get_field('animaux_mis_en_avant')['texte_du_bouton_animaux_mis_en_avant']): ?>
        <div class="text-center text-lg-end mt-2">
            <a class="py-3 px-5 btn btn-arche mt-2 mt-lg-5 mt-lg-0" href="<?= get_field('animaux_mis_en_avant')['lien_vers_la_page_annonces_mises_en_avant'] ?>"><?= get_field('animaux_mis_en_avant')['texte_du_bouton_animaux_mis_en_avant']?></a>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php
    endif;
?>




