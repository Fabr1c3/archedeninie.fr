<?php
// Récupérer toutes les catégories d'animaux
$categories_danimal = get_terms([
    'taxonomy' => 'categorie-danimal',
    'hide_empty' => true,
]);

// S'il n'y a qu'une catégorie d'animal existante, ne pas permettre de filtrer par catégorie
if (count($categories_danimal) > 1) : ?>
    <form action="<?php echo site_url(); ?>/wp-admin/admin-ajax.php" method="POST" id="filter-form-annonces" class="d-flex justify-content-end my-2 align-items-center">
        <?php foreach ($categories_danimal as $category) : ?>
            <div class="form-check me-2">
                <input class="form-check-input" type="checkbox" name="categorie-danimal[]" value="<?= esc_attr($category->term_id); ?>" id="category-<?= esc_attr($category->term_id); ?>">
                <label class="form-check-label" for="category-<?= esc_attr($category->term_id); ?>">
                    <?= esc_html($category->name); ?>
                </label>
            </div>
        <?php endforeach; ?>
        <button class="btn btn-outline-secondary" type="submit"><i class="fa-solid fa-check"></i></button>
        <input type="hidden" name="action" value="filter_annonces">
    </form>
<?php endif; ?>
