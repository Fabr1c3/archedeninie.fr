<?php
$titre = get_field('nous_aider_titre');
$aide1 = get_field('aide_1');
$icone_1 = wp_get_attachment_image($aide1['icone']);
$description1 = $aide1['description'];
$aide2 = get_field('aide_2');
$icone_2 = wp_get_attachment_image($aide2['icone']);
$description2 = $aide2['description'];
$aide3 = get_field('aide_3');
$icone_3 = wp_get_attachment_image($aide3['icone']);
$description3 = $aide3['description'];
$aide4 = get_field('aide_4');
$icone_4 = wp_get_attachment_image($aide4['icone']);
$description4 = $aide4['description'];
$aide5 = get_field('aide_5');
$icone_5 = wp_get_attachment_image($aide5['icone']);
$description5 = $aide5['description'];
$image_fond = get_field('aide_image_fond')['url'];
$bouton = get_field('aide_bouton');
$bouton_lien =  $bouton['aide_lien_du_bouton'];
$bouton_texte = $bouton['aide_texte_du_bouton'];
?>

<div class="nous-aider-section w-100">
    <div class="align-items-center m-auto">
        <div class="nous-aider-content h-100 ">
            <h2 class=""><?= $titre ?></h2>
            <div class="nous-aider">
                <div class="icon">
                    <?= $icone_1 ?>
                </div>
                <div class="details">
                    <?= $description1 ?>
                </div>
            </div>
            <div class="nous-aider">
                <div class="icon">
                    <?= $icone_2 ?>
                </div>
                <div class="details">
                    <?= $description2 ?>
                </div>
            </div>
            <div class="nous-aider">
                <div class="icon">
                    <?= $icone_3 ?>
                </div>
                <div class="details">
                    <?= $description3 ?>
                </div>
            </div>
            <div class="nous-aider">
                <div class="icon">
                    <?= $icone_4 ?>
                </div>
                <div class="details">
                    <?= $description4 ?>
                </div>
            </div>
            <div class="nous-aider">
                <div class="icon">
                    <?= $icone_5 ?>
                </div>
                <div class="details">
                    <?= $description5 ?>
                </div>
            </div>
            <div class="d-flex justify-content-end me-3">
                <a href="<?= $bouton_lien ?>" class="btn btn-arche px-5 py-3"><?= $bouton_texte ?></a>
            </div>
        </div>
    </div>
</div>

<style>
    .nous-aider-section {
        background-image: url("<?= $image_fond ?>");
    }
</style>
