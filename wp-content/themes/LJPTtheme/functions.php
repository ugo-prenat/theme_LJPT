<?php

require_once 'customize/main-menu-img.php';
require_once 'customize/page-banner.php';

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

add_filter('document_title_separator', function() {
    return '|';
});
add_filter('document_title_parts', function() {
    $title['tagline'] = 'Le jeu pour tous';
    return $title;
});

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), '', time());
    wp_enqueue_script('bg-parallax', get_template_directory_uri() . '/js/bg-parallax.js', [], false, true);
    wp_enqueue_script('lottie-files-library', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', [], false, true);
    wp_enqueue_script('lottie-files-animations', get_template_directory_uri() . '/js/animations.js', [], false, true);
});

add_action('after_setup_theme', function() {
    add_theme_support('menus');
    register_nav_menus(array(
        'main-menu-left' => 'main-menu-left',
        'main-menu-right' => 'main-menu-right'
    ));
});

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

function get_post_img_url() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    
    if(empty($first_img)) $first_img = "/images/default.jpg";

    return $first_img;
}

add_filter('the_content', function() {
    return preg_replace( '/<img[^>]+./', '', get_the_content());
});
