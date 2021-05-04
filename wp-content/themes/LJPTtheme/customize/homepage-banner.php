<?php

add_action('customize_register', function(WP_Customize_Manager $manager) {
    
    $manager->add_section('homepage_banner_section', [
        'title' => 'Bannière de la page d\'accueil',
        'priority' => 70
    ]);

    $manager->add_setting('homepage_banner', [
        'default' => get_template_directory_uri() . '/img/background/bg1.jpeg',
    ]);

    $manager->add_control('homepage_banner', [
        'section' => 'homepage_banner_section',
        'setting' => 'homepage_banner',
        'label' => 'Choix de la bannière'
    ]);

    // $manager->add_control(new WP_Customize_Image_Control($manager, 'homepage_banner1', [
    //     'section' => 'homepage_banner_section',
    //     'label' => 'Choix de la bannière'
    // ]));
});