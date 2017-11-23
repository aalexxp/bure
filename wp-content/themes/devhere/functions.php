<?php

if ( ! function_exists( 'dh_setup' ) ) {
    function dh_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('home-blocks', 470, 280, false);

        register_nav_menus(array(
            'site-nav' => esc_html__('Main Site Navigation', 'dh'),
        ));

        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('customize-selective-refresh-widgets');
    }
}

add_action( 'after_setup_theme', 'dh_setup' );

if ( ! function_exists( 'dh_scripts' ) ) {
    function dh_scripts() {
        //styles
        wp_enqueue_style('style', get_stylesheet_uri());
        //scripts
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '20120206', false );
    }
}

add_action( 'wp_enqueue_scripts', 'dh_scripts' );

require_once get_template_directory() . '/includes/properties-post-type.php';