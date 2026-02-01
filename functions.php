<?php
function ozsoy_enqueue_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/templatemo-style.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/templatemo-script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ozsoy_enqueue_assets');

register_nav_menus([
    'main-menu' => 'Ana Menü'
]);

add_filter('use_block_editor_for_post', '__return_false');
