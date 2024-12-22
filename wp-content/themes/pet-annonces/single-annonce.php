<?php get_header();

$ageField = get_field( 'annonce_age_de_lanimal', get_the_ID());
$age = $ageField['annonce_age_nombre'];
$unite = $ageField['annonce_age_unite'];
if (empty($age)) :
    $age = '';
else :
    if($age == 1 && $unite == "Ans") :
        $age = $age . ' ' . 'an';
    elseif ($unite == "Ans") :
        $age = $age . ' ' . 'ans';
    else:
        $age = $age . ' ' . 'mois';
    endif;
endif;

$image = get_field('annonce_card_items')['annonce_image']['url'];
if(empty($image)):
    $image = esc_url(get_theme_mod('arche_defaut_image_annonces'));
endif;
?>

    <div class="container py-5 margin-single">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">


                <!-- Titre du post -->
                <h1 class="mb-3">
                    <?= get_the_title(); ?>
                    <?php if (get_field('annonce_ville')) : ?>
                        <span class="badge-geographie"><?= get_field('annonce_ville'); ?></span>
                    <?php endif; ?>
                </h1>

                <!-- Date du post -->
                <p class="text-muted">
                    Publié le <?= get_the_date(); ?>
                </p>

                <!-- Image à la une -->
                <img src="<?= $image; ?>" class="mb-4 img-annonce" alt="Image à la une">

                <!-- Contenu du post -->
                <div class="text-justify">
                    <?= get_field('texte_de_lannonce'); ?>
                </div>
            </div>
        </div>

            <div class="row mt-5">
                <div class="col-lg-8 offset-lg-2">
                    <h3 class="my-2">Informations supplémentaires</h3>
                    <?php if ($age) : ?>
                        <p>Age : <?= $age ?></p>
                    <?php endif; ?>
                </div>
            </div>
    </div>

<?php
get_footer();