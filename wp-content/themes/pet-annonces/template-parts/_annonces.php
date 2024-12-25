<?php

$annoncesParPage = 12;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Effectuer la requête pour récupérer les annonces
$annonces_query = new WP_Query([
    'post_type' => 'annonce',
    'posts_per_page' => $annoncesParPage,
    'paged' => $paged,
    'post_status' => 'publish',
    'meta_query' => [
            [
                'key' => 'annonce_active_',
                'compare' => '=',
                'value' => '1',
            ]
        ],
]);

// Vérifier si des annonces ont été trouvées
if ($annonces_query->have_posts()) :
    ?>

    <section class="adopt-pet" id="adopt-pet">
        <div class="w-100 m-auto">
            <div class="m-auto">
                <div class="align-items-center pb-5 mt-5">
                        <h2 class="text-center kids-zona">Animaux pour l'adoption</h2>
                        <div class="d-flex justify-content-end">
                            <div class="my-2">
                                <?php
                                include get_template_directory() . '/template-parts/_annonces-filter.php';
                                // On utilise une extension "Ivory Search" pour afficher le formulaire de recherche
                                echo do_shortcode(get_field('shortcode_du_formulaire'));
                                ?>
                            </div>
                        </div>
                </div>
                <div class="container-adoption p-md-3 w-100 w-md-75 m-auto">
                    <div id="response" class="row w-100 w-md-75 m-auto g-3">
                        <?php while ($annonces_query->have_posts()) : $annonces_query->the_post(); ?>
                            <?php get_template_part('template-parts/_annonce_card', null, array(
                                'post' => $annonces_query->post,
                            )); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    set_query_var( 'query', $annonces_query );
    get_template_part('template-parts/_pagination');

    // Réinitialiser les données de la requête
    wp_reset_postdata();
else :
    ?>
    <section class="adopt-pet">
        <div class="w-100 m-auto">
            <div class="m-auto">
                <div class="row align-items-center pb-5 mt-5">
                    <div class="col-12">
                        <h2 class="text-center">Aucune annonce trouvée.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
