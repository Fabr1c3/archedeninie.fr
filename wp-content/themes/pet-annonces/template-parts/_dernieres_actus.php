<?php
$texte_bouton = get_field('texte_du_bouton_dernieres_actualites');

$args_dernieres_actus = array(
    'post_type' => 'post', // Type de publication
    'posts_per_page' => 3, // Nombre maximal d'actus à récupérer
    'post_status' => 'publish', // Uniquement les posts publiés
    'category__not_in' => [1], // On ne veut pas les posts "Sans catégorie"
);

// Requête WP_Query pour les actus
$query_dernieres_actus = new WP_Query($args_dernieres_actus);

?><section class="actualites">
    <div class="w-100 m-auto">
        <div class="m-auto ">
            <div class="row align-items-center pb-5 mt-5">
                <div class="mb-2">
                    <h2 class="text-center kids-zona"><?= get_field('dernieres_actualites')['titre_de_la_section_dernieres_actualites']?></h2>
                </div>
                <?php
                $sousTitre = get_field('dernieres_actualites')['dernieres_actualites_sous_titre_de_la_section'];
                if ($sousTitre): ?>
                    <h3 class="text-center w-75 m-auto"><?= $sousTitre ?></h3>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php

                if ($query_dernieres_actus->have_posts()) :
                    while ($query_dernieres_actus->have_posts()) :
                        // On fait la boucle sur les posts trouvés. On en aura toujours maximum 3
                        $query_dernieres_actus->the_post();
                        ?>
                        <div class="col-12 col-md-4">
                            <div class="mx-5">
                                <?php get_template_part('template-parts/_actualite_card'); ?>
                            </div>
                        </div>
                    <?php

                    endwhile;

                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="text-center text-lg-end mt-2">
            <a class="py-3 px-5 btn btn-arche mt-5 mt-md-0" href="<?= get_field('dernieres_actualites')['lien_vers_la_page_actualites'] ?>"><?= get_field('dernieres_actualites')['texte_du_bouton_dernieres_actualites']?></a>
        </div>
    </div>
</section>
<?php

