<?php
// Ici, je définis ce que le thème peut supporter :
// - Le titre de la page (balise title)
// - Les images dans les articles
// - Les menus de navigation
function arche_add_theme_support(): void {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('menus');
}

// Je définis les différents menus dont j'aurai besoin
// - Le menu de navigation principal, dans l'entête
// - Le menu de navigation de pied de page
// - Le menu de navigation de réseaux sociaux (dans le pied de page)
function arche_register_menus(): void {
    register_nav_menu('arche-header-menu', 'Entête');
    register_nav_menu('arche-footer-menu', 'Pied de page');
    register_nav_menu('arche-social-menu', 'Réseaux sociaux');
}

// J'ajoute une personnalisation du logo, et je précise que mon thème le supporte
// (fonctionne comme la fonction arche_add_theme_support, mais avec un peu plus d'options)
function arche_custom_logo_setup(): void
{
    $defaults = array(
        'height'               => 200,
        'width'                => 200,
        'unlink-homepage-logo' => true,
        'flex-height'          => true,
        'flex-width'           => true,
    );
    add_theme_support( 'custom-logo', $defaults );
}

// Une fois que j'ai défini mes méthodes, je dois les appeler par le hook after_setup_theme
// car ces fonctions seront appelées juste après l'initialisation du theme
// Attention : Important d'appeler arche_add_theme_support avant arche_register_menus car le thème
// doit supporter les menus avant de pouvoir les définir
add_action('after_setup_theme', 'arche_add_theme_support');
add_action('after_setup_theme', 'arche_register_menus');
add_action('after_setup_theme', 'arche_custom_logo_setup');

// Pour personnaliser d'autres éléments comme le logo du footer ou les images par défaut
// des annonces et des actus, j'utilise le hook "customize_register"

function arche_customize_register( $wp_customize ) {

    $wp_customize->add_section('autres_options', array(
        'title' => 'Autres options',
        'priority' => 30
    ));

    $wp_customize->add_setting( 'arche_logo_footer' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arche_logo_footer', array(
        'label'    => 'Logo du footer',
        'section'  => 'autres_options',
        'settings' => 'arche_logo_footer',
    ) ) );

    $wp_customize->add_setting('arche_texte_footer');
    $wp_customize->add_control('arche_texte_footer', array(
        'label' => 'Texte du footer',
        'section' => 'autres_options',
        'type' => 'textarea'
    ));

    $wp_customize->add_setting( 'arche_defaut_image_annonces' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arche_logo_annonces', array(
        'label'    => 'Image par défaut des annonces',
        'section'  => 'autres_options',
        'settings' => 'arche_defaut_image_annonces',
    ) ) );

    $wp_customize->add_setting( 'arche_defaut_image_actus' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arche_logo_actus', array(
        'label'    => 'Image par défaut des actus',
        'section'  => 'autres_options',
        'settings' => 'arche_defaut_image_actus',
    ) ) );
}

add_action( 'customize_register', 'arche_customize_register' );

function arche_add_theme_styles(): void
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    wp_register_style('arche-style', get_template_directory_uri() . '/style.css', [
        'bootstrap',
        'fontawesome',
    ]);

    wp_enqueue_style('arche-style');
}


// Comme pour les styles, j'ai besoin d'importer les scripts du theme.
function arche_add_theme_scripts(): void
{
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', ['jquery', 'popper'], false, true);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', ['jquery', 'popper'], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', [], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js', [], false, true);
    wp_enqueue_script('bootstrap');
    wp_register_script('arche-script', get_template_directory_uri() . '/assets/scripts/script.js', ['jquery'], false, true);
    wp_enqueue_script('arche-script');
}

// ce hook permet de charger les scripts et styles du theme (pour le site)
add_action('wp_enqueue_scripts', 'arche_add_theme_styles');
add_action('wp_enqueue_scripts', 'arche_add_theme_scripts');


// Cette partie permet de personnaliser plus en profondeur les menus
// Dans WordPress, on ne peut pas directement modifier les classes des menus
// il faut donc utiliser des filtres pour les modifier (méthode trouvée sur internet)
function arche_add_classes_to_main_menu(array $classes): array {
    // Cette fonction est appelée avec le hook "nav_menu_css_class" => il permet de récupérer les <li> du menu
    // A chaque <li> j'ajoute la classe "nav-item" de bootstrap pour que ça ressemble à la navbar bootstrap
    // que j'ai choisie
    $classes[] = 'nav-item';
    return $classes;
}

function arche_add_menu_link_class(array $atts): array {
    // De la même manière, le hook "nav_menu_link_attributes" est appelé pour chaque <a> du menu (dans les <li>)
    // A chaque <a> j'ajoute la classe "nav-link" de bootstrap pour que cela ressemble à la navbar bootstrap
    // Et j'ajoute aussi la classe "text-black" pour que le texte soit noir
    $atts['class'] = 'nav-link text-black';
    return $atts;
}

// Après avoir fait les fonctions, ne pas oublier d'appeler les hook
add_filter('nav_menu_link_attributes', 'arche_add_menu_link_class');
add_filter('nav_menu_css_class', 'arche_add_classes_to_main_menu');

// Pour regrouper les éléments de page personnalisés, j'ai eu besoin d'ajouter une entrée de menu
// dans l'administration
function arche_add_elements_de_page_menu_page(): void
{
    add_menu_page(
        'Eléments de page', // Titre de la page
        'Eléments de page', // Titre du menu
        'manage_options', // Capacité requise pour voir le menu
        'arche_elements_de_page', // Slug du menu
        '', // Fonction pour rendre le contenu de la page, si nécessaire (on n'en a pas besoin)
        'dashicons-art', // Icône du menu (icônes dashicons supportées par défaut dans wordpress)
        4 // Position dans le menu
    );
}

// Bien sûr, on appelle le hook correspondant
add_action('admin_menu', 'arche_add_elements_de_page_menu_page');


// Cette fonction agit en réponse à une requête AJAX pour filtrer les actualités en fonction de la catégorie sélectionnée.
function arche_category_actus_filter_function(){
    // Récupérer les arguments de la requête
    $args = array(
        'orderby' => 'date', // Ordonner par date
        'order' => 'DESC', // Ordonner du plus récent au plus ancien
        'posts_per_page' => 6, // Nombre de posts à afficher
        'paged' => 1,
        'post_status' => 'publish', // Uniquement les posts publiés
        'category__in' => array( $_POST['categoryfilter'] ) // Filtrer par catégorie sélectionnée
    );

    // Requête pour récupérer les articles
    $query = new WP_Query( $args );

    // Vérifier si des articles sont trouvés
    if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
            // Afficher chaque article dans une card ?>
            <div class="col-6">
                <?php get_template_part('template-parts/_actualite_card'); ?>
            </div>
        <?php endwhile;
        set_query_var('query', $query);
        get_template_part('template-parts/_pagination');
        wp_reset_postdata();
    else :
        echo 'Aucun article trouvé.'; // Message affiché si aucun article trouvé
    endif;

    die(); // arrêter l'exécution de script
}

// Ajoute la fonction de filtrage AJAX pour les utilisateurs connectés
add_action('wp_ajax_myfilter', 'arche_category_actus_filter_function');
// Ajoute la fonction de filtrage AJAX pour les utilisateurs non connectés
add_action('wp_ajax_nopriv_myfilter', 'arche_category_actus_filter_function');


function arche_category_annonces_filter_function() {
    $categories = isset($_POST['categorie-danimal']) ? array_map('intval', $_POST['categorie-danimal']) : [];

    $args = [
        'post_type' => 'annonce',
        'posts_per_page' => 12,
        'post_status' => 'publish',
        'meta_query' => [
            [
                'key' => 'annonce_active_',
                'compare' => '=',
                'value' => '1',
            ]
        ],
    ];

    if (!empty($categories)) {
        $args['tax_query'] = [
            [
                'taxonomy' => 'categorie-danimal',
                'field' => 'term_id',
                'terms' => $categories,
            ],
        ];
    }

    $annonces_query = new WP_Query($args);

    if ($annonces_query->have_posts()) :
        while ($annonces_query->have_posts()) : $annonces_query->the_post();
            get_template_part('template-parts/_annonce_card', null, ['post' => $annonces_query->post]);
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Aucune annonce trouvée.</p>';
    endif;

    wp_die();
}
add_action('wp_ajax_filter_annonces', 'arche_category_annonces_filter_function');
add_action('wp_ajax_nopriv_filter_annonces', 'arche_category_annonces_filter_function');


// disable taxonomy sitemap
function arche_disable_sitemap_taxonomy($taxonomies) {
    unset($taxonomies['category']); // can be post_tag, category, post_format, or any taxonomy
    unset($taxonomies['categorie-de-pop-up']);
    unset($taxonomies['categorie-danimal']);
    return $taxonomies;
}
add_filter('wp_sitemaps_taxonomies', 'arche_disable_sitemap_taxonomy');

function getAnimalAge($age = null, $unite = null, $birthDate = null) {
    // Si aucune date de naissance n'est fournie
    if ($birthDate === null) {
        // Traiter en fonction de l'âge et de l'unité
        if (empty($age)) {
            return '';
        }
        if ($age == 1 && $unite === "Ans") {
            return $age . ' an';
        }
        if ($unite === "Ans") {
            return $age . ' ans';
        }
        if ($unite === "Mois") {
            return $age . ' mois';
        }
        return $age; // Cas par défaut si l'unité est inconnue
    }
    $birthDateObject = DateTime::createFromFormat('m/Y', $birthDate);

    if ($birthDateObject === false) {
        return '';
    }

    $now = new DateTime();
    $ageYears = $now->diff($birthDateObject)->y;
    $ageMonths = $now->diff($birthDateObject)->m;

    $years = ' an';
    $monthes = ' mois';

    if ($ageYears == 0 && $ageMonths >= 1) {
        return $ageMonths . $monthes;
    }
    if ($ageYears > 1) {
        $years = ' ans';
    }

    if ($ageMonths == 0 || $ageYears > 2) {
        if ($ageMonths > 6) {
            return ($ageYears + 1) . $years;
        }
        return $ageYears . $years;
    }

    return $ageYears . $years . ' et ' . $ageMonths . $monthes;
}

function getAnimalSeniorite(string $age): string
{
    // Exemples possibles de $age :
    // "4 mois", "1 an", "1 an et 3 mois", "10 ans", "10 ans et 2 mois", etc.

    // 1) Séparer en morceaux, on aura un tableau du style :
    //   "2 ans et 3 mois" => ["2", "ans", "et", "3", "mois"]
    //   "4 mois"         => ["4", "mois"]
    //   "1 an"           => ["1", "an"]
    //   "1 an et 8 mois" => ["1", "an", "et", "8", "mois"]
    $parts = explode(' ', $age);

    // 2) Extraire le nombre d'années et de mois
    //    On va compter combien d'années/mois apparaissent dans la chaîne.
    $totalMonths = 0;

    // Petite fonction interne pour convertir "X an(s)" en X * 12, et "Y mois" en Y.
    $parseChunk = function (array $array, int $i) {
        // On regarde $array[$i] = quantité, $array[$i+1] = "an"/"ans"/"mois"
        $number = (int) $array[$i];
        $unit   = $array[$i+1] ?? '';

        if (str_starts_with($unit, 'an')) {
            return $number * 12;
        }
        if (str_starts_with($unit, 'mois')) {
            return $number;
        }
        return 0; // par défaut
    };

    // 3) Parcourir le tableau $parts pour détecter "X an(s)" et "Y mois"
    //    Indice : s'il y a "et" au milieu, on le saute.
    for ($i = 0; $i < count($parts); $i++) {
        if (is_numeric($parts[$i])) {
            // On lit le nombre + l’unité
            $totalMonths += $parseChunk($parts, $i);
            $i++; // on avance d'un cran en plus car on a traité [nombre, unité]
        }
    }

    // 4) Décider de la catégorie en fonction du total des mois
    if ($totalMonths < 6) {
        return 'Chaton';
    }
    if ($totalMonths < 24) {
        return 'Junior';
    }
    if ($totalMonths < 120) {
        return 'Adulte';
    }
    return 'Senior';
}

