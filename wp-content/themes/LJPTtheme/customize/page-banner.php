<?php

add_action('customize_register', function(WP_Customize_Manager $manager) {
    
    $manager->add_panel('page_banner_panel', [
        'title' => 'Bannière de page',
        'priority' => 70
    ]);

    $manager->add_section('homepage_banner_section', [
        'panel' => 'page_banner_panel',
        'title' => 'Page d\'accueil',
    ]);
    $manager->add_section('activity_page_banner_section', [
        'panel' => 'page_banner_panel',
        'title' => 'Page d\'activités',
    ]);
    $manager->add_section('community_page_banner_section', [
        'panel' => 'page_banner_panel',
        'title' => 'Page des collectivités',
    ]);
    $manager->add_section('practical_data_page_banner_section', [
        'panel' => 'page_banner_panel',
        'title' => 'Page d\'infos pratiques',
    ]);
    $manager->add_section('about_page_banner_section', [
        'panel' => 'page_banner_panel',
        'title' => 'Page qui sommes nous ?',
    ]);
    $manager->add_section('bonus_page_banner_section', [
        'panel' => 'page_banner_panel',
        'title' => 'Page bonus',
    ]);

    $manager->add_setting('homepage_banner', [
        'default' => get_template_directory_uri() . '/img/background/bg-home.jpg',
    ]);
    $manager->add_setting('activity_page_banner', [
        'default' => get_template_directory_uri() . '/img/background/bg-activites.jpg',
    ]);
    $manager->add_setting('community_page_banner', [
        'default' => get_template_directory_uri() . '/img/background/bg-collectivites.jpeg',
    ]);
    $manager->add_setting('practical_data_page_banner', [
        'default' => get_template_directory_uri() . '/img/background/bg-infos-pratiques.jpg',
    ]);
    $manager->add_setting('about_page_banner', [
        'default' => get_template_directory_uri() . '/img/background/bg-qui-sommes-nous.jpg',
    ]);
    $manager->add_setting('bonus_page_banner', [
        'default' => get_template_directory_uri() . '/img/background/bg-infos-pratiques.jpg',
    ]);

    $manager->add_control('homepage_banner', [
        'section' => 'homepage_banner_section',
        'label' => 'Choix de la bannière'
    ]);
    $manager->add_control('activity_page_banner', [
        'section' => 'activity_page_banner_section',
        'label' => 'Choix de la bannière'
    ]);
    $manager->add_control('community_page_banner', [
        'section' => 'community_page_banner_section',
        'label' => 'Choix de la bannière'
    ]);
    $manager->add_control('practical_data_page_banner', [
        'section' => 'practical_data_page_banner_section',
        'label' => 'Choix de la bannière'
    ]);
    $manager->add_control('about_page_banner', [
        'section' => 'about_page_banner_section',
        'label' => 'Choix de la bannière'
    ]);
    $manager->add_control('bonus_page_banner', [
        'section' => 'bonus_page_banner_section',
        'label' => 'Choix de la bannière'
    ]);

    // $manager->add_control(new WP_Customize_Image_Control($manager, 'homepage_banner', [
    //     'section' => 'homepage_banner_section',
    //     'label' => 'Choix de la bannière'
    // ]));
    // $manager->add_control(new WP_Customize_Image_Control($manager, 'activity_page_banner', [
    //     'section' => 'activity_page_banner_section',
    //     'label' => 'Choix de la bannière'
    // ]));
    // $manager->add_control(new WP_Customize_Image_Control($manager, 'community_page_banner', [
    //     'section' => 'community_page_banner_section',
    //     'label' => 'Choix de la bannière'
    // ]));
    // $manager->add_control(new WP_Customize_Image_Control($manager, 'practical_data_page_banner', [
    //     'section' => 'practical_data_page_banner_section',
    //     'label' => 'Choix de la bannière'
    // ]));
    // $manager->add_control(new WP_Customize_Image_Control($manager, 'about_page_banner', [
    //     'section' => 'about_page_banner_section',
    //     'label' => 'Choix de la bannière'
    // ]));
    // $manager->add_control(new WP_Customize_Image_Control($manager, 'bonus_page_banner', [
    //     'section' => 'bonus_page_banner_section',
    //     'label' => 'Choix de la bannière'
    // ]));
});