<?php
/**
* Plugin Name: Block infos newsletter
*/

add_action('enqueue_block_editor_assets', function() {
    wp_enqueue_script('newsletter-info-block', plugin_dir_url(__FILE__) . '/newsletter-info-block.js', [], false, true);
});