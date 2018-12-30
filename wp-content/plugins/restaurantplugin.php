<?php 
/*
Plugin Name: Restaurant Plugin & Taxonomies
Plugin URI:
Description: Adds Custom Post Types To Site
Version: 1.0
Author: Shakim Harris
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

add_action ('init', 'ga_restaurant_plug_post_type', 0 );


function ga_restaurant_plug_post_type() {

    //Labels for the Post Type
    $labels = array(
        'name'               => _X( 'Recipes', 'Post Type General Name', 'gourmet-artist' ),
        'singular_name'      => _X( 'Recipe', 'Post Type Singular Name', 'gourmet-artist' ),
        'menu_name'          => __(  'Recipes', 'gourmet-artist' ),
        'parent_item_colon'  => __( 'Parent Recipe', 'gourmet-artist' ),
        'all_items'          => __( 'All Recipes', 'gourmet-artist' ),
        'view_item'          => __( 'View Recipe', 'gourmet-artist' ),
        'add_new_item'       => __( 'Add New Recipe', 'gourmet-artist'),
        'add_new'            => __( 'Add New Recipe', 'gourmet-artist'),
        'edit_item'          => __( 'Edit Recipe', 'gourmet-artist'),
        'update_item'        => __( 'Updated Recipe', 'gourmet-artist'),
        'search_items'       => __( 'Search Recipes', 'gourmet-artist'),
        'not_found'          => __( 'No Recipes Found', 'gourmet-artist'),
        'not_found_in_trash' => __( 'No Recipes Found in Trash', 'gourmet-artist'),
    );

// Additional Customizations

$args = array(
    'label' => __('Recipes', 'gourmet-artist'),
    'description' => __('Recipes For Gourmet Artistry', 'gourmet-artist'),
    'labels' => $labels, 
    'supports' => array('title', 'editor', 'revisions', 'thumbnails'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'menu_position' => 5,
    'menu-icon' => 'dashicons-admin-page',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);


// Register the Post type
register_post_type( 'recipes', $args);
}





?>