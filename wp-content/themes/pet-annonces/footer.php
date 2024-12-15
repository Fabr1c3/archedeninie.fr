<footer class="py-4 ">
    <?php
    get_template_part('partials/_partenaire');
    ?>
    <div class="footer">
        <div class="row align-items-center mx-5">
            <div class="col-12 col-lg-2">
                <a href="<?php echo home_url(); ?>">
                    <?php
                    $logo_footer= esc_url(get_theme_mod('arche_logo_footer'));
                    ?>
                    <img class="img-logo-footer" src="<?= $logo_footer ?>" alt="Logo du site">
                </a>
            </div>
            <div class="d-none d-lg-block col-lg-4">
                <p class="text-justify text-center text-wrap text-footer">
                    <?php echo get_theme_mod('arche_texte_footer'); ?>
                </p>
            </div>
            <div class="col-12 col-lg-6 menu-footer">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'arche-footer-menu',
                        'container' => false,
                        'menu_class' => 'd-flex flex-column flex-md-row justify-content-center align-items-center mb-auto mt-3 m-md-5 pb-md-4',
                        'fallback_cb' => '__return_false', // Si le menu n'est pas trouvé, on n'affiche rien
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Formate le menu
                        'depth' => 1, // On ne veut pas de sous-menu
                    ))
                ?>

                <div class="d-flex  justify-content-center align-items-center">
                    <?php
                    $menu_name = 'arche-social-menu';
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    if ($menu) :
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                    endif;
                    foreach ($menu_items as $menu_item) :
                        $link = $menu_item->url;
                        $icon = $menu_item->title;
                        ?>
                        <a href="<?= $link ?>" class="reseaux-sociaux mx-2" target="_blank" aria-label="<?= $icon ?>"><i class="fab fa-<?= $icon ?> reseaux-sociaux fa-3x"></i></a>
                    <?php
                    endforeach;
                    ?>
                    <div id="ecoindex-badge"></div>

                </div>
            </div>
        </div>
    </div>


    <p class="text-center text-copyright mb-0 pb-0 mt-2">&copy; Copyright 2024 Arche de Ninie. Tous droits réservés.</p>
</footer>
<?php wp_footer() ?>
</body>
<!--     <?php if (!is_single()) : ?>
        <script src="https://cdn.jsdelivr.net/gh/cnumr/ecoindex_badge@3/assets/js/ecoindex-badge.js" defer></script>
    <?php endif; ?> -->
</html>