
<?php
    $card_1 = $args['card_1'];
    $card_2 = $args['card_2'];
    $card_3 = $args['card_3'];
    $card_4 = $args['card_4'];
    $card_5 = $args['card_5'];
    $card_6 = $args['card_6'];
?>


    <div class="row">
        <div class="col-sm">
            <?php get_template_part('template-parts/_soutenir_card', null, $card_1); ?>
        </div>
        <div class="col-sm">
            <?php get_template_part('template-parts/_soutenir_card', null, $card_2); ?>
        </div>
        <div class="col-sm">
            <?php get_template_part('template-parts/_soutenir_card', null, $card_3); ?>
        </div>
    </div>
    <div id="famille-accueil-card" class="row">
        <div class="col-sm">
            <?php get_template_part('template-parts/_soutenir_card', null, $card_4); ?>
        </div>
        <div class="col-sm">
            <?php get_template_part('template-parts/_soutenir_card', null, $card_5); ?>
        </div>
        <div class="col-sm">
            <?php get_template_part('template-parts/_soutenir_card', null, $card_6); ?>
        </div>
    </div>

