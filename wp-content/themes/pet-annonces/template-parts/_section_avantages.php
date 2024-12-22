<?php
$titre = get_field('avantages_titre');
$avantages = get_field('avantages');
$icone_1 = wp_get_attachment_image($avantages['icone_avantage_1']['ID']);
$avantage1 = $avantages['avantage_1'];
$icone_2 = wp_get_attachment_image($avantages['icone_avantage_2']['ID']);
$avantage2 = $avantages['avantage_2'];
$icone_3 = wp_get_attachment_image($avantages['icone_avantage_3']['ID']);
$avantage3 = $avantages['avantage_3'];
$image_fond = get_field('avantage_image_fond')['url'];
$bouton = get_field('avantage_bouton');
$bouton_texte = $bouton['avantage_texte_du_bouton'];
$bouton_lien =  $bouton['avantage_lien_du_bouton'];
?>
<div class="avantage-section w-100">
    <div class="align-items-center m-auto">
        <div class="avantage-content h-100 ">
            <h2 class=""><?= $titre ?></h2>
            <div class="avantage">
                <div class="icon">
                    <?= $icone_1 ?>
                </div>
                <div class="details">
                    <?= $avantage1 ?>
                </div>
            </div>
            <div class="avantage">
                <div class="icon">
                    <?= $icone_2 ?>
                </div>
                <div class="details">
                    <?= $avantage2 ?>
                </div>
            </div>
            <div class="avantage">
                <div class="icon">
                    <?= $icone_3 ?>
                </div>
                <div class="details">
                    <?= $avantage3 ?>
                </div>
            </div>
            <div class="d-flex justify-content-center m-auto mw-75 justify-content-lg-end me-lg-5">
                <a href="<?= $bouton_lien ?>" class="btn btn-arche px-5 py-3"><?= $bouton_texte ?></a>
            </div>
        </div>
    </div>
</div>

<style>
    .avantage-section {
        background-image: url("<?= $image_fond ?>");
    }
</style>