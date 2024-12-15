<?php
$title = get_field('a_propos_titre');
$partie_1 = get_field('a_propos_partie_1');
$partie_2 = get_field('a_propos_partie_2');
$image = get_field('a_propos_image');
$bouton_texte = get_field('a_propos_texte_du_bouton');
$bouton_lien = get_field('a_propos_lien_du_bouton');
?>
<div class="d-flex justify-content-around">

</div>
<section class="a-propos-nous">
    <div class="container-nous mt-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h2 class="text-left mt-lg-5 pb-5 m-2 p-2 kids-zona text-center"><?= $title ?></h2>
                <p class="text-justify my-2 mx-5 p-2">
                    <?php // Insertion du premier paragraphe de texte
                    echo $partie_1 ?>
                </p>
            </div>
            <div class="col-12 col-md-6 p-5">
                <figure class="wp-block-image size-full">
                    <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt'] ?>">
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-0 col-lg-6">
            </div>
            <div class="col-12 col-lg-6">
                <p class="text-justify my-lg-2 mx-5 p-2 ">
                    <?php // Insertion du dernier paragraphe de texte
                    echo $partie_2 ?>
                </p>
                <div class="d-flex justify-content-end me-lg-5 text-md-end ">
                    <a class="py-3 px-5 btn btn-arche mt-5 mt-md-0" href="<?= $bouton_lien ?>"><?= $bouton_texte ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
