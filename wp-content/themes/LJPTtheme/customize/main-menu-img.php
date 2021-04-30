<?php

add_action('customize_register', function(WP_Customize_Manager $manager) {
    
    $manager->add_section('main_menu_img_section', [
        'title' => 'Image du menu principal',
        'priority' => 60
    ]);

    $manager->add_setting('main_menu_img', [
        'default' => get_template_directory_uri() . '/img/logo1.png',
    ]);

    $manager->add_control('main_menu_img', [
        'section' => 'main_menu_img_section',
        'setting' => 'main_menu_img',
        'label' => 'Choix de l\'image du menu principal'
    ]);

    // $manager->add_control(new WP_Customize_Image_Control($manager, 'main_menu_img', [
    //     'section' => 'main_menu_img_section',
    //     'label' => 'Choix de l\'image du menu principal'
    // ]));
});