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
        'footer'  => 'منوی پابرگ (فوتر)',
    ));
}

add_action('after_setup_theme', 'agency_theme_setup');


function agency_theme_setup_extra() {

    // TECH-006: logo manageable from the WP admin via native means
    add_theme_support('custom-logo', array(
        'height'      => 96,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Controlled Gutenberg (TECH-004/TECH-005): approved tokens inside the editor
    add_theme_support('editor-styles');
    add_editor_style('style.css');

    add_theme_support('align-wide');
}

add_action('after_setup_theme', 'agency_theme_setup_extra');


function agency_theme_enqueue_styles() {

    /*
     * Cache busting: real file modification time, so owners and visitors
     * always receive the current CSS after an edit (no stale stylesheet).
     */
    $style_path = get_template_directory() . '/style.css';

    wp_enqueue_style(
        'agency-theme-style',
        get_stylesheet_uri(),
        array(),
        file_exists( $style_path ) ? (string) filemtime( $style_path ) : '1.0.0'
    );

    // Homepage stylesheet
    if ( is_front_page() ) {
        $home_path = get_template_directory() . '/assets/css/home.css';

        wp_enqueue_style(
            'agency-theme-home',
            get_template_directory_uri() . '/assets/css/home.css',
            array('agency-theme-style'),
            file_exists( $home_path ) ? (string) filemtime( $home_path ) : '1.0.0'
        );
    }
}

add_action('wp_enqueue_scripts', 'agency_theme_enqueue_styles');


// Contact form (shortcode [webhoda_contact_form])
require_once get_template_directory() . '/inc/contact-form.php';

// Shared services data (homepage section + services page)
require_once get_template_directory() . '/inc/services-data.php';
