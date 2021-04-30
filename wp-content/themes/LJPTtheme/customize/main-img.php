<?php

/**
 * 1 => page d'accueil
 * 2 => page infos pratiques
 * 3 => page activités
 * 4 => page collectivités
 */

add_action('customize_register', function(WP_Customize_Manager $manager) {
    
    $manager->add_panel('main_img_panel', [
        'title' => 'Images principales',
        'priority' => 50
    ]);

    $manager->add_section('main_img_section1', [
        'title' => 'Page d\'accueil',
        'panel' => 'main_img_panel'
    ]);
    $manager->add_section('main_img_section2', [
        'title' => 'Page infos pratiques',
        'panel' => 'main_img_panel'
    ]);
    $manager->add_section('main_img_section3', [
        'title' => 'Page activités',
        'panel' => 'main_img_panel'
    ]);

    $manager->add_setting('main_img1', [
        'default' => get_template_directory_uri() . '/img/background/bg1.jpeg',
    ]);
    $manager->add_setting('main_img2', [
        'default' => get_template_directory_uri() . '/img/background/bg2.jpeg',
    ]);
    $manager->add_setting('main_img3', [
        'default' => get_template_directory_uri() . '/img/background/bg3.jpeg',
    ]);

    $manager->add_control('main_img1', [
        'section' => 'main_img_section1',
        'setting' => 'main_img1',
        'label' => 'Choix de l\'image principale'
    ]);
    $manager->add_control('main_img2', [
        'section' => 'main_img_section2',
        'setting' => 'main_img2',
        'label' => 'Choix de l\'image principale'
    ]);
    $manager->add_control('main_img3', [
        'section' => 'main_img_section3',
        'setting' => 'main_img3',
        'label' => 'Choix de l\'image principale'
    ]);

    // $manager->add_control(new WP_Customize_Image_Control($manager, 'main_img1', [
    //     'section' => 'main_img_section1',
    //     'label' => 'Choix de l\'image principale'
    // ]));
    // $manager->add_control(new WP_Customize_Image_Control($manager, 'main_img2', [
    //     'section' => 'main_img_section2',
    //     'label' => 'Choix de l\'image principale'
    // ]));
    // $manager->add_control(new WP_Customize_Image_Control($manager, 'main_img3', [
    //     'section' => 'main_img_section3',
    //     'label' => 'Choix de l\'image principale'
    // ]));
});