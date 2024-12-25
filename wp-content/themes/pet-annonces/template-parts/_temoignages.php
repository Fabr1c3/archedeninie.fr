<?php

// Effectuer la requête pour récupérer les témoignages
$temoignages_query = new WP_Query([
    'post_type' => 'temoignage',
    'post_status' => 'publish',
]);

// Vérifier si des témoignages ont été trouvés
if ($temoignages_query->have_posts()) :
    ?>

    <section class="adopt-pet">
        <div class="w-100 m-auto">
            <div class="m-auto">
                <div class="align-items-center pb-5 mt-5">
                    <h2 class="text-center kids-zona">Vos témoignages</h2>
                    <h3 class="text-center w-75 m-auto">Depuis 2020, nous naviguons sur les flots de la protection animale. Grâce à nos chaloupes, ces familles d'accueil dévouées, nos petits naufragés ( chiens, chats, lapins,... recueillis ) ont pu retrouver une nouvelle chance. Aujourd'hui, ces compagnons ont jeté l'ancre et rejoint leur navire pour la vie. Découvrez les témoignages touchants de ceux qui ont offert un port sûr à nos rescapés.</h3>
                </div>
                <div class="container-adoption p-md-3 w-100 w-md-75 m-auto">
                    <div class="carousel-container">
                        <button class="carousel-button prev">❮</button>
                        <div class="carousel-track">
                            <?php while ($temoignages_query->have_posts()) : $temoignages_query->the_post(); ?>
                                <?php get_template_part('template-parts/_temoignage_card', null, array(
                                    'post' => $temoignages_query->post,
                                )); ?>
                            <?php endwhile; ?>
                        </div>
                        <button class="carousel-button next">❯</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    wp_reset_postdata();
endif;
?>