<?php get_header();


?>

<section class="hero-temoignage">
    <div class="hero-overlay">
        <h1 class="hero-title kids-zona">Témoignage de <?= get_field('nom_de_ladoptant') ?></h1>
    </div>
</section>

<!-- Contenu principal -->
<main class="single-temoignage-container">
    <div class="profile-side">
        <?php $image = get_field('illustration_du_temoignage');
        if ($image) : ?>

        <!-- Photo de l'animal ou auteur du témoignage -->
        <div class="profile-pic-wrapper">
            <img
                    src="<?= $image["url"] ?>"
                    alt="Photo"
                    class="profile-pic"
            >
        </div>
        <?php endif; ?>
        <h2 class="temoignage-author kids-zona">
            <?= get_field('nom_de_ladopte') ?>
        </h2>
    </div>

    <article class="temoignage-content">
        <!-- Citation, texte long, etc. -->
        <div class="quote-container">
            <div class="left-quote">“</div>
            <p>
                <?= get_field('texte_du_temoignage') ?>
            </p>
            <div class="right-quote">”</div>
        </div>

        <!-- Bouton ou lien supplémentaire si besoin -->
        <div class="link-back">
            <a href="<?= wp_get_referer() ?>" class="btn-back">Découvrir plus de témoignages</a>
        </div>
    </article>
</main>

<?php get_footer(); ?>
