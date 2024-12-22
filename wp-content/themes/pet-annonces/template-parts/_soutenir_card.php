<?php
$title = $args['titre'];
$text = $args['texte'];
$details = $args['details'];
$icon = wp_get_attachment_image($args['icone'], 'full', false, array('class' => 'participation-card-icon', 'style' => 'max-height: 120px; width: auto;'));
?>

<div class="participation-card m-auto my-4 shadow-sm" style="max-width: 400px; border: none; border-radius: 15px; height: 300px; display: flex; flex-direction: column; justify-content: space-between; position: relative; overflow: hidden;">
    <div class="participation-card-body" style="padding: 20px;">
        <?php if ($title): ?>
            <h3 class="participation-card-title text-center font-weight-bold"><?= $title ?></h3>
        <?php endif;?>
        <p class="participation-card-text text-center mt-3"><?= $text ?></p>
    </div>
    <div class="text-center mb-3" style="padding: 10px;">
        <?= $icon ?>
    </div>
    <div class="participation-card-details hidden p-2">
        <p class="text-center"><?= $details ?></p>
    </div>
    <div class="participation-arrow-down">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21l-12-18h24z"/></svg>
    </div>
</div>
