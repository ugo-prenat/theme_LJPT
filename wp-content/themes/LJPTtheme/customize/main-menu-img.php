<?php

add_action('customize_register', function(WP_Customize_Manager $manager) {
    
    $manager->add_panel('main_menu_img_panel', [
        'title' => 'Images du menu principal',
        'priority' => 80
    ]);

    $manager->add_section('main_menu_small_img_section', [
        'panel' => 'main_menu_img_panel',
        'title' => 'Image petite (vue ordinateur)',
    ]);
    $manager->add_section('main_menu_large_img_section', [
        'panel' => 'main_menu_img_panel',
        'title' => 'Image large (vue téléphone)',
    ]);

    $manager->add_setting('main_menu_small_img', [
        'default' => get_template_directory_uri() . '/img/logo-small.png',
    ]);
    $manager->add_setting('main_menu_large_img', [
        'default' => get_template_directory_uri() . '/img/logo-large.jpeg',
    ]);

    $manager->add_control('main_menu_small_img', [
        'section' => 'main_menu_small_img_section',
    ]);
    $manager->add_control('main_menu_large_img', [
        'section' => 'main_menu_large_img_section',
    ]);

    // $manager->add_control(new WP_Customize_Image_Control($manager, 'main_menu_small_img', [
    //     'section' => 'main_menu_small_img_section',
    // ]));
    // $manager->add_control(new WP_Customize_Image_Control($manager, 'main_menu_large_img', [
    //     'section' => 'main_menu_large_img_section',
    // ]));
});