<?php
function thc_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Primary Menu', 'texas-horticulture')
    ]);
}
add_action('after_setup_theme', 'thc_theme_setup');

function thc_enqueue_styles() {
    wp_enqueue_style('thc-style', get_stylesheet_uri());
    wp_enqueue_style('thc-main', get_template_directory_uri() . '/assets/css/main.css', [], '1.0', 'all');
    wp_enqueue_script('thc-js', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'thc_enqueue_styles');
?>
