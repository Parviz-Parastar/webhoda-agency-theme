<?php

function agency_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    register_nav_menus(array(
        'primary' => 'منوی اصلی سایت',
    ));
}

add_action('after_setup_theme', 'agency_theme_setup');


function agency_theme_enqueue_styles() {

    // Main theme stylesheet
    wp_enqueue_style(
        'agency-theme-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // Homepage stylesheet
    if (is_front_page()) {
        wp_enqueue_style(
            'agency-theme-home',
            get_template_directory_uri() . '/assets/css/home.css',
            array('agency-theme-style'),
            '1.0.0'
        );
    }
}

add_action('wp_enqueue_scripts', 'agency_theme_enqueue_styles');
