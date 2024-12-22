<div id="donate-container">
    <button id="donate-button" class="donate-button">

            <span class="button-content">
                <span class="heart-icon">
                    <i class="fa-regular fa-heart"></i>
                    <span class="currency-symbol">€</span>
                </span>
                <p><?= get_field('texte_du_bouton_de_dons')?></p>
            </span>

        <div class="donate-options">
            <span class="donate-option">
                <a href="<?= get_field('premier_lien')['url'] ?>">
                    <?= get_field('texte_du_premier_lien') ?>
                </a>
            </span>
            <span class="donate-option">
                <a href="<?= get_field('second_lien')['url'] ?>" target="_blank">
                    <?= get_field('texte_du_second_lien') ?>
                </a>
            </span>
        </div>
    </button>
</div>