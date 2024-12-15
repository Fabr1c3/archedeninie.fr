<?php
$pagination_query = get_query_var( 'query' );
// Afficher la pagination avec le style Bootstrap
$pagination_links = paginate_links([
    'total' => $pagination_query->max_num_pages, // Nombre total de pages
    'prev_text' => '&laquo;', // Texte pour le lien précédent
    'next_text' => '&raquo;', // Texte pour le lien suivant
]);
if ($pagination_links) : ?>
    <div class="w-100 d-flex justify-content-center">
        <nav aria-label="Pagination">
            <ul class="pagination">
                <?php
                // Remplacer les classes de liens
                $pagination_links = str_replace('page-numbers', 'page-numbers page-link', $pagination_links);

                // Ajouter la classe page-item aux éléments li
                $pagination_links = str_replace('<a ', '<li class="page-item"><a class="page-link" ', $pagination_links);
                $pagination_links = str_replace('</a> ', '</a></li>', $pagination_links);
                $pagination_links = str_replace('<span ', '<li class="page-item"><span class="page-link active" ', $pagination_links);
                $pagination_links = str_replace('</span> ', '</span></li>', $pagination_links);

                // Afficher les liens paginés
                echo $pagination_links;
                ?>
            </ul>
        </nav>
    </div>
<?php endif; ?>