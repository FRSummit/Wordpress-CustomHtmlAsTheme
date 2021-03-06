<?php

// Load Styles
function load_stylesheets() {

    wp_register_style('font', get_template_directory_uri() . '/fonts/beyond_the_mountains-webfont.css', array(), 1, 'all');
    wp_enqueue_style('font');

    wp_register_style('bootstrap', get_template_directory_uri() . '/plugin-frameworks/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('swiper', get_template_directory_uri() . '/plugin-frameworks/swiper.css', array(), 1, 'all');
    wp_enqueue_style('swiper');

    wp_register_style('ionicons', get_template_directory_uri() . '/fonts/ionicons.cs', array(), 1, 'all');
    wp_enqueue_style('ionicons');

    wp_register_style('styles', get_template_directory_uri() . '/common/styles.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    // wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_register_style('custom', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


// Load Scripts

function addjs() {
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/plugin-frameworks/jquery-3.2.1.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');
    
    wp_register_script('bootstrap', get_template_directory_uri() . '/plugin-frameworks/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');
    
    wp_register_script('swiper', get_template_directory_uri() . '/plugin-frameworks/swiper.js', array(), 1, 1, 1);
    wp_enqueue_script('swiper');
    
    wp_register_script('scripts', get_template_directory_uri() . '/common/scripts.js', array(), 1, 1, 1);
    wp_enqueue_script('scripts');
    
    wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'addjs');

// // Load Map Script for Contact Us Page

// function load_map_js() {
//     if(is_page(93)) {
//         wp_register_script('google_map_js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB-oEyU88bRR6xcbV1gI_Cahc8ugKC_JPE&callback=initMap', '', false);
//         wp_enqueue_script('google_map_js');
//     }
// }
// add_action('wp_enqueue_scripts', 'load_map_js');


// Load Elements page's js

function elements_page_js() {
    if(is_page(99)) {
        // wp_register_script('waypoints', get_template_directory_uri() . '/plugin-frameworks/jquery.waypoints.min.js', array(), 1, 1, 1);
        // wp_enqueue_script('waypoints');

        // wp_register_script('progressbar', get_template_directory_uri() . '/plugin-frameworks/progressbar.min.js', array(), 1, 1, 1);
        // wp_enqueue_script('progressbar');
    }
}
add_action('wp_enqueue_scripts', 'elements_page_js');


// Custom image sizes
add_image_size('product_image_small', 400, 400, false);
add_image_size('product_image_large', 700, 700, false);
add_image_size('hero', 1200, 600, true);


// Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');


// Register Menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
);


// Add a widget
//page sidebar
register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);

//blog sidebar
register_sidebar(
    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);


