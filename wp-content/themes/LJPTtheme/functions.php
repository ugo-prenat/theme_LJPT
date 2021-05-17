<?php

require_once 'customize/main-menu-img.php';
require_once 'customize/page-banner.php';
require_once 'widgets/newsletter-widget.php';
require_once 'widgets/play-equality-widget.php';
require_once 'widgets/sign-language-videos-widget.php';

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
    wp_enqueue_script('parallaxEffect', get_template_directory_uri() . '/js/parallaxEffect.js', [], time(), true);
    wp_enqueue_script('topOfPageBtn', get_template_directory_uri() . '/js/topOfPageBtn.js', [], false, true);
    wp_enqueue_script('lottie-files-library', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js', [], false, true);
    wp_enqueue_script('lottie-files-animations', get_template_directory_uri() . '/js/animations.js', [], time(), true);
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

add_action('widgets_init', function() {

    register_widget(NewsletterWidget::class);
    register_widget(PlayEqualityWidget::class);
    register_widget(SignLanguageVideosWidget::class);

    register_sidebar([
        'id' => 'sidebar-homepage',
        'name' => 'sidebar accueil',
    ]);
    register_sidebar([
        'id' => 'sidebar-practical-data',
        'name' => 'sidebar infos pratiques',
    ]);
    register_sidebar([
        'id' => 'sidebar-community',
        'name' => 'sidebar collectivités',
    ]);
    register_sidebar([
        'id' => 'sidebar-about-us',
        'name' => 'sidebar qui sommes nous',
    ]);
});

function getTwitterShareLink($post_title, $post_url) {
    return 'https://twitter.com/intent/tweet?text=' . str_replace(' ', '%20', $post_title) . '&url=' . $post_url;
}
function getFacebookShareLink($post_title, $post_url) {
    return 'https://www.facebook.com/sharer.php?u=' . $post_url . '&t=' . str_replace(' ', '%20', $post_title);
}
function getWhatsappShareLink($post_title, $post_url) {
    return 'https://api.whatsapp.com/send?text=' . str_replace(' ', '%20', $post_title) . '%20' . $post_url;
}
