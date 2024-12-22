<?php
$procedure_card = get_field('procedure_cards');
$sousTitreSection = get_field('procedure_card_sous_titre');
?>

<section class="procedure mx-auto px-0">

    <div class="container procedure px-0 py-3 mx-auto mb-5 ">
        <?php $mainTitle = get_field( 'procedure_card_titre', $procedure_card->ID); ?>
        <h2 class="text-center kids-zona my-5"><?= $mainTitle ?></h2>
        <?php if ($sousTitreSection): ?>
        <h3 class="text-center w-75 m-auto"><?= $sousTitreSection ?></h3>
        <?php endif; ?>

        <div class="container procedure-etape p-xl-5 ">
            <div class="container w-75   pb-2  ">
                <div class="row text-center">
                    <?php
                    for ($i=1 ; $i <= 3; $i++):
                        // On fait une boucle pour récupérer nos 3 cards
                        $title = get_field( 'procedure_card_titre_' . $i, $procedure_card->ID);
                        $text = get_field( 'procedure_card_texte_' . $i, $procedure_card->ID);
                        $iconId = get_field( 'procedure_card_icone_' . $i, $procedure_card->ID);
                        $icon = wp_get_attachment_image($iconId);
                        ?>
                        <div class="col-12 col-md-4 d-flex flex-column justify-content-start align-items-center">
                            <div class="icon-procedure">
                                <?= $icon ?>
                            </div>
                            <?php if ($title): ?>
                                <h3 class="procedure mx-auto px-0 pt-4"><?= $title ?></h3>
                            <?php endif; ?>
                            <p class="procedure text-center mx-auto px-0 pt-3 "><?= $text ?></p>
                        </div>
                    <?php
                    endfor;
                    ?>
                </div>
            </div>
        </div>
</section>
