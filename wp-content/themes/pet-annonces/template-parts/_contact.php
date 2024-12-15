<div class="row">
    <div class="col-12 d-flex align-center justify-content-center">
        <?php
        $form = get_field('formulaire_de_contact');
        if ($form) {
            $id = $form->ID;
            $title = $form->post_title;
            echo do_shortcode('[contact-form-7 id="' . $id . '" title="' . esc_attr($title) . '"]');
        }
        ?>
    </div>
</div>
