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
        if (!is_admin())
            wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
        wp_enqueue_style('style-dh', get_stylesheet_uri());
        //scripts
//        wp_enqueue_script( 'scripts-dh', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), false );
    }
}

add_action( 'init', 'dh_scripts' );

function dh_search( $query ) {

    if ( $query->is_search ) {
        $query->set( 'post_type', array( 'post', 'properties' ) );
    }

    return $query;

}

add_filter( 'pre_get_posts', 'dh_search' );

require_once get_stylesheet_directory() . '/includes/properties-post-type.php';
require_once get_stylesheet_directory() . '/includes/suburb-taxonomy.php';
require_once get_stylesheet_directory() . '/includes/properties-meta-box.php';