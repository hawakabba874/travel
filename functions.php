<?php
function travelagency_enqueue_styles() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');

    // Your main theme style
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Bootstrap JS (Bundle includes Popper)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('darkmode-toggle', get_template_directory_uri() . '/js/darkmode-toggle.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'travelagency_enqueue_styles');

// Register Navigation Menus
function travelagency_setup() {
    register_nav_menus(array(
        'main-menu' => 'Main Navigation Menu'
    ));
}
add_action('after_setup_theme', 'travelagency_setup');
