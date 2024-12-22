<?php get_header();

$image = get_the_post_thumbnail_url(get_the_ID(), 'full');
if(empty($image)):
    $image = esc_url(get_theme_mod('arche_defaut_image_actus'));
endif;

// Lorsque depuis une carte actualité on clique pour voir le post, on redirige vers cette page
// qui récupère le post en question
?>

<div class="container py-5 margin-single">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <h1 class="mb-3 text-center"><?= get_the_title(); ?></h1>
            <p class="text-muted text-center mb-2 mb-lg-5 m-auto">Publié le <?= get_the_date(); ?></p>
            <div class="row">
                <div class="col-12 col-lg-6 m-auto p-3">
                    <img src="<?= $image; ?>" class="rounded img-actus w-100" alt="<?= get_the_title(); ?>">
                </div>
                <div class="post-content col-lg-6 col-12 text-justify m-auto">
                    <?= apply_filters('the_content', get_post_field('post_content')); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
