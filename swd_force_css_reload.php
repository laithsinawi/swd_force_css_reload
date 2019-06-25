<?php
/*
Plugin Name: SWD Force Stylesheet Reload
Plugin URI: https://www.sinawiwebdesign.com
Description: Use during development to force browser to download stylesheet from server on every page load.
Version: 0.1.0
Author: Sinawi Web Design
*/
function swd_force_css_reload() {
    wp_dequeue_style('wpex-style');
}
add_action('wp_enqueue_scripts', 'swd_force_css_reload', 11);

function swd_enqueue_style() {
    $rand = rand(1, 99999999);
    wp_enqueue_style('wpex-style', get_stylesheet_directory_uri() . '/style.css', array(), $rand);
}
add_action('wp_enqueue_scripts', 'swd_enqueue_style', 10);
