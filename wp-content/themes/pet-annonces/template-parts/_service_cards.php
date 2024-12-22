<?php
$service_card = get_field('service_card');
$titreSection = get_field('service_titre_de_la_section');
$sousTitreSection = get_field('service_sous_titre_de_la_section');
?>
<h2 class="text-center kids-zona my-5"><?= $titreSection ?></h2>
<?php if ($sousTitreSection): ?>
    <h3 class="text-center w-75 m-auto"><?= $sousTitreSection ?></h3>
<?php endif; ?>
<div class="row p-2 mt-3">
    <?php
    for ($i=1 ; $i <= 3; $i++):
        // On fait une boucle pour récupérer nos 3 cards
        $title = get_field( 'service_card_titre_' . $i, $service_card->ID);
        $text = get_field( 'service_card_texte_' . $i, $service_card->ID);
        $iconId = get_field( 'service_card_icone_' . $i, $service_card->ID);
        $icon = wp_get_attachment_image($iconId);

        ?>
        <div class="col-md-4 col-12 gy-5 gy-md-0 gx-5">
            <div class="card m-auto card-service">
                <div class="row card-body-service">
                    <div class="icon-service col-3 p-1">
                        <?= $icon ?>
                    </div>
                    <div class="details col-9 p-1">
                        <p class="card-service-title"><?= $title ?></p>
                        <p class="card-service-text px-3"><?= $text ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endfor;
    ?>
</div>

