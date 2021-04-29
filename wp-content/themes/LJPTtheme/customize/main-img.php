<?php
add_action('customize_register', function(WP_Customize_Manager $manager) {
    
    $manager->add_section('main_img_section', [
        'title' => 'Image principale',
        'priority' => 50
    ]);

    $manager->add_setting('main_img', [
        'default' => get_template_directory_uri() . '/img/background/bg-home.jpeg',
    ]);

    $manager->add_control('main_img', [
        'section' => 'main_img_section',
        'setting' => 'main_img',
        'label' => 'Choix de l\'image principale'
    ]);

    // $manager->add_control(new WP_Customize_Image_Control($manager, 'main_img', [
    //     'section' => 'main_img_section',
    //     'label' => 'Choix de l\'image principale'
    // ]));

});