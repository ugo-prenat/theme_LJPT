<?php
/**
* Plugin Name: LJPT - block catalogue
*/

add_action('enqueue_block_editor_assets', function() {
    wp_enqueue_script('catalogue-block', plugin_dir_url(__FILE__) . '/catalogue-block.js', [], false, true);
});