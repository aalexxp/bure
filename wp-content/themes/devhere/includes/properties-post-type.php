<?php

$labels = array(
    'name' => 'Properties',
    'singular_name' => 'Property',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Property',
    'edit_item' => 'Edit Property',
    'new_item' => 'New Property',
    'all_items' => 'All Properties',
    'view_item' => 'View Property',
    'search_items' => 'Search properties',
    'not_found' =>  'No properties found',
    'not_found_in_trash' => 'No properties found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Properties'
);
$args = array(
    'labels' => $labels,
    'public' => false,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 34,
    'supports' =>array( 'title', 'editor', 'thumbnail' )
);

register_post_type('properties', $args);