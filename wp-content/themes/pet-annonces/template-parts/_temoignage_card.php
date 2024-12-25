<?php

$post = $args['post']; // Récupère le post passé en argument

// Champs ACF
$nomAdoptant = get_field('nom_de_ladoptant', $post->ID);
$nomAdopte = get_field('nom_de_ladopte', $post->ID);
$texteTemoignage = get_field('texte_du_temoignage', $post->ID);
$illustration = get_field('illustration_du_temoignage', $post->ID);
$imageURL = !empty($illustration['url']) ? esc_url($illustration['url']) : '';
$iconChienPath = get_stylesheet_directory() . '/assets/svg/chien-logo.svg';

?>

<div class="container-temoignage carousel-item">

    <div class="quote-card">
        <!-- Titre du témoignage -->
        <?php if (str_contains($nomAdoptant, ' et ')): ?>
            <h2><?= esc_html($nomAdoptant) ?> ont adopté <?= esc_html($nomAdopte) ?></h2>
        <?php else: ?>
            <h2><?= esc_html($nomAdoptant) ?> a adopté <?= esc_html($nomAdopte) ?></h2>
        <?php endif; ?>

        <!-- Extrait du témoignage -->
        <p class="truncated"><?= esc_html($texteTemoignage) ?></p>

        <!-- Lien vers la page complète -->
        <a href="<?= esc_url(get_permalink($post->ID)) ?>" class="author">En savoir plus</a>

        <!-- Image de l'animal/adoptant -->
        <?php if ($imageURL): ?>
            <img src="<?= $imageURL ?>" alt="Image de <?= esc_attr($nomAdoptant) ?>" class="profile-image">
        <?php endif; ?>

        <!-- Icône chien -->
        <div class="right-image">
            <?php if (file_exists($iconChienPath)) : ?>
                <?= file_get_contents($iconChienPath) ?>
            <?php endif; ?>
        </div>
    </div>

</div>
