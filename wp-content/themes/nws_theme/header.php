<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="photographie, photographe, nature, paysage, animaux, NW Studio, photos, galerie">
        <meta name="description" content="Bienvenue sur le site de NW Studio, nous sommes spécialisés dans la capture de la beauté de la nature, des paysages et des animaux. Explorez notre galerie pour découvrir nos photos et notre portfolio.">
        <title>NW Studio</title>
        <?php wp_head() ?>
    </head>
    <body>
        <header class="header js-header">
            <div class="header__nav">
                <img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Logo de NW Studio.">
                <svg class="phone-nav-svg js-phone-nav-menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                <svg class="phone-nav-svg hide-phone-nav-svg js-phone-nav-close-menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
            </div>
            <div class="header__list">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'NavMenu',
                        'menu_class' => 'header__nav-menu  hide hide-menu-for-phone-size js-nav',
                    ));
                ?>
            </div>
        </header>
