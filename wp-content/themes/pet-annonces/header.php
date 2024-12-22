<?php // Le header qui est utilisé sur toutes les pages ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>
<body <?php body_class('container-fluid'); ?>>

<?php get_template_part('template-parts/_nav') ?>
