<?php

$actusParPage = 6;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Effectuer la requête pour récupérer les annonces
$actus_query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => $actusParPage,
    'paged' => $paged,
    'post_status' => 'publish',
    'category__not_in' => [1],
]);

// Vérifier si des annonces ont été trouvées
if ($actus_query->have_posts()) :
    ?>
    <section class="actualites">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title text-center kids-zona"><?= get_field('sous_titre_de_la_page') ?></h2>
                </div>
            </div>

            <div class="row mb-4 justify-content-center">
                <div class="row col-12 col-lg-6">
                    <div class="col-12">
                        <div class="my-2">
                            <?php
                            // On utilise une extension "Ivory Search" pour afficher le formulaire de recherche
                            echo do_shortcode(get_field('shortcode_du_formulaire'));
                            ?>
                        </div>
                        <form action="<?php echo site_url(); ?>/wp-admin/admin-ajax.php" method="POST" id="filter">

                            <?php
                            // Fonction pour afficher récursivement les catégories et leurs enfants (pour faire un
                            // menu déroulant plus joli)
                            // Ici, on crée juste la fonction, elle est appelée plus tard pour s'exécuter
                            function display_categories_hierarchically($terms, $level = 0) {
                                foreach ($terms as $term) {

                                    $indent = str_repeat('- ', $level);
                                    // A chaque fois qu'on trouve une catégorie, on crée une entrée dans le menu déroulant
                                    echo sprintf('<option value="%s">%s%s</option>', $term->term_id, $indent, $term->name);

                                    // Si cette catégorie a des enfants
                                    $child_terms = get_terms(array(
                                        'taxonomy' => 'category',
                                        'parent' => $term->term_id, // Seulement les enfants directs, pas les enfants des enfants
                                        'orderby' => 'name',
                                        'hide_empty' => false, // Même si la catégorie n'a pas de posts, on veut l'afficher
                                    ));

                                    if (!empty($child_terms)) {
                                        // La fonction s'appelle elle-même au cas où il y aurait des sous-sous-catégories
                                        display_categories_hierarchically($child_terms, $level + 1);
                                    }
                                }
                            }

                            // Récupérer toutes les catégories parentes pour initialiser le menu
                            $parent_terms = get_terms(array(
                                'taxonomy' => 'category',
                                'parent' => 0, // Seulement les parents, les enfants seront récupérés grâce à la fonction
                                'orderby' => 'name',
                                'exclude' => [1],
                                'hide_empty' => false,
                            ));

                            if (!empty($parent_terms)) :
                                ?>
                                <div class="input-group mb-3">
                                    <select class="form-select" name="categoryfilter"><option>Sélectionnez une catégorie...</option>
                                        <?php
                                        // C'est ici qu'on appelle notre fonction avec les catégories parentes comme paramètres
                                        // pour pouvoir tout récupérer
                                        display_categories_hierarchically($parent_terms);
                                        ?>
                                    </select>
                                    <button class="btn btn-outline-secondary" type="submit"><i class="fa-solid fa-check"></i></button>
                                    <a href="<?= get_permalink() ?>" class="btn btn-outline-secondary ms-2">Voir tout</a>
                                </div>
                            <?php endif; ?>
                            <input type="hidden" name="action" value="myfilter">
                        </form>
                    </div>
                    <div class="d-none d-lg-block col-lg-12">
                        <img class="mw-100" src="<?= get_field('actualites_image_en_avant')['url'] ?>" alt="Chat dans une caisse">
                    </div>
                </div>

                <div id="response" class="row col-12 col-lg-6">
                    <?php
                    while ($actus_query->have_posts()) : $actus_query->the_post();
                        // On affiche toutes les actualités trouvées (par défaut : toutes)
                        ?>
                        <div class="col-12 col-lg-6">
                            <?php get_template_part('template-parts/_actualite_card'); ?>
                        </div>
                    <?php endwhile;
                    set_query_var('query', $actus_query);
                    // On insère ici la pagination
                    get_template_part('template-parts/_pagination');?>
                </div>
            </div>
        </div>
    </section>
<?php endif;
// Réinitialiser les données de la requête
wp_reset_postdata();
?>
