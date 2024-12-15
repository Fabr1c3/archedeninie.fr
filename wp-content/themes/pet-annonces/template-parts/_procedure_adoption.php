<?php
$titre = get_field('procedure_adoption_titre');
$etape1 = get_field('procedure_adoption_etape_1');
$icone_1 = wp_get_attachment_image($etape1['icone']);
$contenu1 = $etape1['contenu'];
$etape2 = get_field('procedure_adoption_etape_2');
$icone_2 = wp_get_attachment_image($etape2['icone']);
$contenu2 = $etape2['contenu'];
$etape3 = get_field('procedure_adoption_etape_3');
$icone_3 = wp_get_attachment_image($etape3['icone']);
$contenu3 = $etape3['contenu'];
$etape4 = get_field('procedure_adoption_etape_4');
$icone_4 = wp_get_attachment_image($etape4['icone']);
$contenu4 = $etape4['contenu'];
$contenu_supp = get_field('procedure_adoption_contenu_supplementaire');
$image_fond = get_field('procedure_adoption_image_de_fond')['url'];
?>

<div class="procedure-adoption-section w-100">
    <div class="align-items-center m-auto">
        <div class="procedure-adoption-content h-100 ">
            <h2 class=""><?= $titre ?></h2>
            <div class="procedure-adoption">
                <div class="icon">
                    <?= $icone_1 ?>
                </div>
                <div class="details">
                    <?= $contenu1 ?>
                </div>
            </div>
            <div class="procedure-adoption">
                <div class="icon">
                    <?= $icone_2 ?>
                </div>
                <div class="details">
                    <?= $contenu2 ?>
                </div>
            </div>
            <div class="procedure-adoption">
                <div class="icon">
                    <?= $icone_3 ?>
                </div>
                <div class="details">
                    <?= $contenu3 ?>
                </div>
            </div>
            <div class="procedure-adoption">
                <div class="icon">
                    <?= $icone_4 ?>
                </div>
                <div class="details">
                    <?= $contenu4 ?>
                </div>
            </div>
            <?= $contenu_supp ?>
        </div>
    </div>
</div>

<style>
    .procedure-adoption-section {
        background-image: url("<?= $image_fond ?>");
    }
</style>
