<?php
/**
* Plugin Name: LJPT - block infos ludothèque
*/

add_action('enqueue_block_editor_assets', function() {
    wp_enqueue_script('games-library-data-block', plugin_dir_url(__FILE__) . '/games-library-data-block.js', [], false, true);
});