<?php
// J'initialise $args pour éviter de fausses erreurs de mon éditeur de code
$args = $args ?? null; // Signifie : si $args existe, tu le laisse comme il est, sinon, il est null

$post = $args['post'];


$title = get_the_title($post);
$sex = get_post_meta(get_the_ID(), 'annonce_sexe_de_lanimal', true);
// On propose de mettre une courte description dans le formulaire (par exemple : "chat siamois")
// On la récupère ici
$cardItems = get_field('annonce_card_items', get_the_ID());
$shortDesc = $cardItems['annonce_courte_description'];
$categoryId = get_field('annonce_categorie', get_the_ID());
$category = get_term_by('id', $categoryId, 'categorie-danimal')->name;
if(empty($shortDesc) || $shortDesc == '') :
    // Sinon, on utilise la catégorie de l'annonce en courte description
    $shortDesc = $category;
endif;

$ageField = get_field( 'annonce_age_de_lanimal', get_the_ID());
$age = $ageField['annonce_age_nombre'];
$unite = $ageField['annonce_age_unite'];
$dateOfBirth = get_field('annonce_date_de_naissance', get_the_ID());
$age = getAnimalAge($age, $unite, $dateOfBirth);

$petInfo = $shortDesc . '<br>' . $age;

$icon = '';
// On affiche le Sexe : signe de venus pour les femelles, signe de mars pour les males, rien si aucun sexe n'est renseigné
if ($sex === 'Femelle'):
    $icon = '<i class="fa-solid fa-venus card-sex"></i>';
elseif ($sex === 'Mâle'):
    $icon = '<i class="fa-solid fa-mars card-sex"></i>';
endif;
$image = get_the_post_thumbnail_url($post->ID, 'full');
$image = $cardItems['annonce_image']['url'];
if(empty($image)):
    $image = esc_url(get_theme_mod('arche_defaut_image_annonces'));
endif;

$icone_partager = get_theme_mod('arche_icone_partager');
?>
<div class="col-md-4 col-12 d-flex justify-content-center ">
    <a class="nav-link" href="<?= get_permalink() ?>">
        <div class="card animal-card">
            <img class="card-img-top" src="<?= $image ?>" alt="Card image">
            <div class="card-body">
                <div class="card-title-container text-center">
                    <h3 class="name-pet"><?= $title ?></h3>
                </div>
                <div class="d-flex justify-content-between w-100 m-0 p-0">
                    <p class="card-text text-start text-muted"><?= $petInfo ?></p>
                    <p class="card-text text-end"><?= $icon ?></p>
                </div>
            </div>
        </div>
    </a>
</div>
