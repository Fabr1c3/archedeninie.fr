<?php
// Insertion d'une actualité, on récupère son image si il y en a une, sinon on prend une image par défaut
$image = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
if (empty($image)) :
    $image = esc_url(get_theme_mod('arche_defaut_image_actus'));
endif;
?>

<a class="nav-link" href="<?= get_permalink(get_the_ID()) ?>">
    <div class="card custom-card-actualite my-2">
        <img src="<?= $image ?>" class="actualite-card-img-top my-1 mx-auto" alt="...">
        <div class="align-items-start text-start p-2 m-0">
            <small class="text-muted"><?= get_the_date() ?></small>
            <p class="actualite-card-text">
                <small class="text-muted"><?= get_the_category()[0]->name ?></small>
            </p>
            <h3 class="card-text actualite-card-text"><?= get_the_title() ?></h3>
        </div>
    </div>
</a>