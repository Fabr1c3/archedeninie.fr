<?php get_header();

$gender =get_post_meta(get_the_ID(), 'annonce_sexe_de_lanimal', true);
$ageField = get_field( 'annonce_age_de_lanimal', get_the_ID());
$birthDate = get_field('annonce_date_de_naissance', get_the_ID());
$longDate = '';
$age ='';
if(!empty($birthDate) && $birthDate !== '') {
    $birthDateObject = DateTime::createFromFormat('m/Y', $birthDate);
    $formatter = new IntlDateFormatter(
        'fr_FR',
        IntlDateFormatter::LONG,
        IntlDateFormatter::NONE,
    );
    $formatter->setPattern('LLLL yyyy');

    $longDate = $formatter->format($birthDateObject);

    $longDate = ucfirst($longDate);
    $age = getAnimalAge(null, null, $birthDate);
}

if ($age === ''){
    $age = getAnimalAge($ageField['annonce_age_nombre'], $ageField['annonce_age_unite']);
}

$categoryAge = getAnimalSeniorite($age);

$textContent = get_field('texte_de_lannonce');

$contentToDisplay = [];
if (strlen($textContent['ma_famille_de_reve']['texte']) > 0) {
    $contentToDisplay[] = $textContent['ma_famille_de_reve'];
}
if (strlen($textContent['mon_environnement_ideal']['texte']) > 0) {
    $contentToDisplay[] = $textContent['mon_environnement_ideal'];
}
if (strlen($textContent['mes_pretentions']['texte']) > 0) {
    $contentToDisplay[] = $textContent['mes_pretentions'];
}

$image = get_field('annonce_card_items')['annonce_image']['url'];
if(empty($image)):
    $image = esc_url(get_theme_mod('arche_defaut_image_annonces'));
endif;

$otherImages = get_field('autres_images');

?>
<div class="container py-5 margin-single">
    <article id="post-<?php the_ID(); ?>" <?php post_class('single-animal-page'); ?>>

        <!-- Bouton retour ou lien vers la liste des animaux -->
        <div class="back-navigation" title="Retour">
            <a href="<?php echo wp_get_referer('animal'); ?>" class="back-link">
                <?php $svg_file = get_stylesheet_directory() . '/assets/svg/referer.svg';
                if ( file_exists( $svg_file ) ) {
                echo file_get_contents( $svg_file );
                }
                ?>
            </a>
        </div>

        <div class="single-animal-container">

            <aside class="animal-thumbnails">

                <?php
                if($otherImages):
                foreach ($otherImages as $otherImage): ?>
                    <?php if (!$otherImage) continue; ?>
                    <div>
                        <img src="<?= esc_url($otherImage['url']); ?>" class="thumbnail" alt="Thumbnail">
                    </div>
                <?php
                endforeach;
                endif; ?>
            </aside>

            <div class="animal-main-image">
                <img src="<?= esc_url($image); ?>" class="mb-4 img-annonce main-image" alt="Image à la une">
            </div>

            <!-- Détails principaux de l’animal -->
            <div class="animal-info">

                    <h1 class="mb-3">
                        <span class="kids-zona"><?= get_the_title(); ?></span>
                        <?php if (get_field('annonce_ville')) : ?>
                            <span class="badge-geographie"><?= get_field('annonce_ville'); ?></span>
                        <?php endif; ?>
                    </h1>

                <p class="publish-date">
                    Publié le <?php echo get_the_date('d M Y'); ?>
                </p>

                <!-- Exemple de champ ACF pour FIV -->
                <?php
                $healthData = get_field('arche_sante');
                $fiv = $healthData ? $healthData['arche_fiv'] : "";
                $felv = $healthData ? $healthData['arche_felv'] : "";
                ?>

                <p class="animal-health">
                    <?php if ($fiv && $fiv['value'] !== 'non-teste') : ?>
                        <p><strong>FIV : </strong><?= $fiv['label'] ?></p>
                    <?php endif; ?>
                    <?php if ($felv && $felv['value'] !== 'non-teste') : ?>
                        <p><strong>FELV : </strong><?= $felv['label'] ?></p>
                    <?php endif; ?>
                </p>

                <p><strong>Catégorie : </strong> <?= getAnimalSeniorite($age) ?></p>
                <!-- Genre, date de naissance, âge, etc. -->
                <p><strong>Genre : </strong> <?= $gender ?></p>
                <?php if ($longDate && $gender == 'Femelle') : ?>
                    <p><strong>Née en : </strong><?= $longDate ?></p>
                <?php elseif ($longDate):; ?>
                    <p><strong>Né en : </strong><?= $birthDate ?></p>
                <?php endif; ?>

                <?php if ($age) : ?>
                    <p><strong>Âge : </strong><?= $age ?></p>
                <?php endif; ?>
                <p class="adoption-intent">
                    Je souhaite me renseigner ou adopter
                    <span class="animal-name-highlight"><?php the_title(); ?></span>
                </p>

                <a href="contactez-nous?your-message=Bonjour,%20je%20souhaite%20me%20renseigner%20ou%20adopter%20<?php echo urlencode(get_the_title()); ?>&your-subject=Adopter%20un%20animal"
                   class="p-3 px-5 btn btn-arche mt-3">
                    Rencontrer cet animal
                </a>


            </div>
        </div><!-- .single-animal-container -->

            <?php for ($i = 0; $i < count($contentToDisplay); $i++) : ?>
                <div class="text-justify my-3 ms-5">
                    <h2 class="my-3"><?= $contentToDisplay[$i]['titre']; ?></h2>
                    <h3>
                        <?= $contentToDisplay[$i]['texte']; ?>
                    </h3>
                </div>
            <?php endfor; ?>

        <?php $compats = get_field('arche_annonces_compatibilites');
        $check = get_stylesheet_directory() . '/assets/svg/check-mark.svg';
        $cross = get_stylesheet_directory() . '/assets/svg/cross.svg';
        if ($compats) :
        ?>
        <section class="animal-incompatibility">

            <?php $compat = $compats['arche_annonces_compatibilite_chats'];
            $titleChats = ( $compat["value"] === "Compatible" )
                ? "Compatible avec d'autres chats"
                : "Incompatible avec d'autres chats";
            ?>
            <div class="icon-container" title="<?= $titleChats ?>">
                <?php
                $svg_file = get_stylesheet_directory() . '/assets/svg/chat.svg';
                if ( file_exists( $svg_file ) ) {
                    echo file_get_contents( $svg_file );
                }
                ?>
                <span class="icon-wrapper">
                   <?php
                   $mark = $compat["value"] === "Compatible" ? $check : $cross;
                   echo file_get_contents( $mark );
                   ?>
                </span>
            </div>
            <?php $compat = $compats['arche_annonces_compatibilite_chiens'];
            $titleChien = ( $compat["value"] === "Compatible" )
                ? "Compatible avec les chiens"
                : "Incompatible avec les chiens";
            ?>
            <div class="icon-container" title="<?= $titleChien ?>">
                <?php
                $svg_file = get_stylesheet_directory() . '/assets/svg/chien.svg';
                if ( file_exists( $svg_file ) ) {
                    echo file_get_contents( $svg_file );
                }
                ?>
                <span class="icon-wrapper">
                   <?php
                   $mark = $compat["value"] === "Compatible" ? $check : $cross;
                   echo file_get_contents( $mark );
                   ?>
                </span>
            </div>
            <?php $compat = $compats['arche_annonces_compatibilite_appartement'];
            $titleAppart = ( $compat["value"] === "Compatible" )
                ? "Compatible avec la vie en appartement"
                : "Incompatible avec la vie en appartement";
            ?>
            <div class="icon-container" title="<?= $titleAppart ?>">
                <?php
                $svg_file = get_stylesheet_directory() . '/assets/svg/appartement.svg';
                if ( file_exists( $svg_file ) ) {
                    echo file_get_contents( $svg_file );
                }
                ?>
                <span class="icon-wrapper">
                   <?php
                   $mark = $compat["value"] === "Compatible" ? $check : $cross;
                   echo file_get_contents( $mark );
                   ?>
                </span>
            </div>
            <?php $compat = $compats['arche_annonces_compatibilite_enfants'];
            $titleEnfant = ( $compat["value"] === "Compatible" )
                ? "Compatible avec les enfants"
                : "Incompatible avec les enfants";
            ?>
            <div class="icon-container" title="<?= $titleEnfant ?>">
                <?php
                $svg_file = get_stylesheet_directory() . '/assets/svg/enfants.svg';
                if ( file_exists( $svg_file ) ) {
                    echo file_get_contents( $svg_file );
                }?>
                <span class="icon-wrapper">
                   <?php
                   $mark = $compat["value"] === "Compatible" ? $check : $cross;
                   echo file_get_contents( $mark );
                   ?>
                </span>
            </div>
            <?php $compat = $compats['arche_annonces_compatibilite_bebes'];
            $titleBebes = ( $compat["value"] === "Compatible" )
                ? "Compatible avec les bébés"
                : "Incompatible avec les bébés";
            ?>
            <div class="icon-container" title="<?= $titleBebes ?>">
                <?php
                $svg_file = get_stylesheet_directory() . '/assets/svg/tetine.svg';
                if ( file_exists( $svg_file ) ) {
                    echo file_get_contents( $svg_file );
                }
                ?>
                <span class="icon-wrapper">
                   <?php
                   $mark = $compat["value"] === "Compatible" ? $check : $cross;
                   echo file_get_contents( $mark );
                   ?>
                </span>
            </div>





        </section>
        <?php endif; ?>
        <!-- Bouton renvoyant vers la liste des animaux -->
        <div class="all-animals-button">
            <a href="<?php echo _get_page_link(200); ?>" class="p-3 px-5 btn btn-arche mt-3">
                Tous nos animaux
            </a>
        </div>

    </article>
</div>
<?php
get_footer();
?>
