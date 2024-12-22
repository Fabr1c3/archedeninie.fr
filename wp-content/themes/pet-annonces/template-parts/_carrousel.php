<?php
$titre = $args['title'] ?? get_field('carrousel')['titre_du_carrousel'];
$sousTitre = $args['subtitle'] ?? get_field('carrousel')['sous_titre_du_carrousel'];
$carrousel = $args['choice'] ?? get_field('carrousel')['choix_du_carrousel'];
?>

<div class="partenaire">
    <h2 class="text-center pt-4 mt-4 mb-2 kids-zona"><?= $titre ?></h2>
    <?php if($sousTitre): ?>
    <h3 class="text-center w-75 m-auto"><?= $sousTitre ?></h3>
    <?php endif; ?>
    <div id="carouselPartenaires" class="p-4">
        <div class="mt-1 carrousel-temoignages-content">
            <?php // On récupère le carousel créé avec l'extension metaslider
            echo do_shortcode('[metaslider id="' . $carrousel->ID . '"]') ?>
        </div>
    </div>
</div>

<style>
	.carrousel-temoignages-content{
		max-width:35vw;
		margin:auto;
	}

	@media screen and (max-width: 998px) {
		.carrousel-temoignages-content{
			max-width:80vw;
		}
	}
</style>
