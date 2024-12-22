<?php
$stats_card = get_field('statistiques');
?>
<section class="stats">
    <div class="container statistique w-75">
        <div class="justify-content-center row">
            <div class="row col-12">
                <?php
                for ($i=1 ; $i <= 3; $i++):
                    // On fait une boucle pour récupérer nos 3 cards
                    $chiffre = get_field( 'statistiques_chiffre_' . $i, $stats_card->ID);
                    $texte = get_field( 'statistiques_texte_' . $i, $stats_card->ID);
                    ?>
                    <div class="col-12 col-md-4 text-center pt-4">
                        <p class="stats-number"><?= $chiffre ?></p>
                        <p class="stats-text"><?= $texte ?></p>
                    </div>
                <?php
                endfor;
                ?>
            </div>
        </div>
    </div>
</section>

