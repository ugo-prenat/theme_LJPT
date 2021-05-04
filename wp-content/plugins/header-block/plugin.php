<?php
/**
* Plugin Name: Image d'en-tête
*/

add_action('enqueue_block_editor_assets', function() {
    wp_enqueue_script('header-block', plugin_dir_url(__FILE__) . '/header-block.js', [], false, true);
});