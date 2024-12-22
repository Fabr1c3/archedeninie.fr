<?php

$title = get_field('banniere_titre');
$content = get_field('banniere_texte');
$btnText = get_field('banniere_texte_du_bouton');
$btnLink = get_field('banniere_lien_du_bouton');
$thumbnail = get_field('banniere_image');

?>
<section class="hero-section d-flex align-items-center m-auto">
    <div class="container col-12">
        <div class="row d-flex align-items-center m-auto">
            <div class="col-12 col-lg-3 col-xl-4 col-xxl-5 text-center">
                <?php if ($title): ?>
                <h1 class="title-hero-banner kids-zona"><?= $title ?></h1>
                <?php endif; ?>
                <?php if ($content): ?>
                <p class="text-center text-hero-banner"><?= $content ?></p>
                <?php endif; ?>
                <?php if ($btnText): ?>
                <a class="p-3 px-5 btn btn-arche mt-3" href="<?= $btnLink ?>"><?= $btnText ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<style>
    <?php // Je n'ai pas trouvé comment utiliser du php dans les fichiers css
    // J'ai donc été obligée de mettre de style ici ?>
    .hero-section {
        background-image: url('<?= esc_url($thumbnail['url']) ?>');
        background-position: top right;
    }
    @media screen and (max-width: 992px) {
        .hero-section {
            background-color: var(--secondary-color);
            background-image: none;
        }
    }

</style>
