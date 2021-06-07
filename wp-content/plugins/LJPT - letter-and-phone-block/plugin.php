<?php
/**
* Plugin Name: LJPT - block courrier et téléphone
*/

add_action('enqueue_block_editor_assets', function() {
    wp_enqueue_script('letter-and-phone-block', plugin_dir_url(__FILE__) . '/letter-and-phone-block.js', [], false, true);
});