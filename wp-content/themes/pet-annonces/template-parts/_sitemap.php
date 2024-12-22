
<div class="container">
    <h1><?php the_title(); ?></h1>
<h2>Pages</h2>
<ul>
    <?php
    wp_list_pages(array(
        'title_li' => '',
    ));
    ?>
</ul>

<h2>Annonces</h2>
<ul>
    <?php
    $annonces_query = new WP_Query(array(
        'post_type' => 'annonce',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    ));
    while ($annonces_query->have_posts()) : $annonces_query->the_post();
        ?>
        <li><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
    <?php endwhile; wp_reset_query(); ?>
</ul>

<h2>Articles</h2>
<ul>
    <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => -1, // Toutes les publications
        'post_status' => 'publish',
    ));
    foreach ($recent_posts as $post) :
        ?>
        <li><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></li>
    <?php endforeach; wp_reset_query(); ?>
</ul>
</div>