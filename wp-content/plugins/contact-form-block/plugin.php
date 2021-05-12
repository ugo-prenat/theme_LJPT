<?php
/**
* Plugin Name: Block formulaire de contact
*/

add_action('enqueue_block_editor_assets', function() {
    wp_enqueue_script('contact-form-block', plugin_dir_url(__FILE__) . '/contact-form-block.js', [], false, true);
});