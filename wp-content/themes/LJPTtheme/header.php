<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
    <!-- MENU -->
    <div class="responsive-menu-container" style="<?php if(is_user_logged_in()) echo 'margin-top: 32px' ?>">
        <div class="hamb-menu-container"></div>
        <img src="<?= get_theme_mod('main_menu_large_img') ?>" class="large-img" alt="Logo le jeu pour tous">
    </div>

    <div class="menu-container" style="<?php if(is_user_logged_in()) echo 'margin-top: 32px' ?>">
        <div class="left-menu-container menu-part-container">
            <?php wp_nav_menu(['theme_location' => 'main-menu-left']) ?>
        </div>

        <div class="menu-img-container">
            <div class="menu-img">
                <img src="<?= get_theme_mod('main_menu_small_img') ?>" class="small-img" alt="Logo le jeu pour tous">
                <div class="box-shadow-container"></div>
            </div>
        </div>
        
        <div class="right-menu-container menu-part-container">
            <?php wp_nav_menu(['theme_location' => 'main-menu-right']) ?>
        </div>
    </div>