<?php
/**
* Plugin Name: Block "nous trouver"
*/

add_action('enqueue_block_editor_assets', function() {
    wp_enqueue_script('find-us-block', plugin_dir_url(__FILE__) . '/find-us-block.js', [], false, true);
});