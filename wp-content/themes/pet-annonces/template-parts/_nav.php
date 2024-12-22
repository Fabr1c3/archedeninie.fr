<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

?>


<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?= $custom_logo[0] ?>" alt="logo du site" class="custom-logo">

    </a>
    <button class="navbar-toggler border-0 collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon border-0"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarResponsive">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'arche-header-menu', // Le menu à afficher
                'container' => false, // On ne veut pas de div supplémentaire
                'menu_class' => 'navbar-nav ms-auto', // Les classes Bootstrap pour le menu
                'fallback_cb' => '__return_false', // Si le menu n'est pas trouvé, on n'affiche rien
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Formate le menu
                'depth' => 1, // On ne veut pas de sous-menu
            ));
        ?>
    </div>
  </div>
</nav>
