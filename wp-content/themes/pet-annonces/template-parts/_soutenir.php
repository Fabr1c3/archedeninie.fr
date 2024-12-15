<div class="container">
    <h2 class="text-center w-75 m-auto kids-zona my-3 my-lg-5"><?= get_field('soutenir_titre_de_la_section') ?></h2>
    <?php $sousTitre = get_field('soutenir_sous_titre_de_la_section');
    if ($sousTitre): ?>
    <h3 class="text-center w-75 m-auto"><?= $sousTitre ?></h3>
    <?php endif; ?>
    <?php
    get_template_part('template-parts/_soutenir_cards', null, get_fields());
    ?>
</div>

<!-- <div class="row">
    <div class="col-12">
        <?php
        $form = get_field('formulaire_de_dons');
        $formId = $form->ID;
        echo do_shortcode('[give_form id="' . $formId . '"]');
        ?>
    </div>
</div> -->