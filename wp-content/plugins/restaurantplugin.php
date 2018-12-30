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
        'name'               => __X( 'Recipes', 'Post Type General Name', 'gourmet-artist' ),
        'singular_name'      => __X( 'Recipe', 'Post Type Singular Name', 'gourmet-artist' ),
        'menu_name'          => __(  'Recipes', 'gourmet-artist' ),
        'parent_item_colon'  => __( 'Parent Recipe', 'gourmet-artist' ),
        'all_items'          => __( 'All Recipes', 'gourmet-artist' ),
        'view_item'          => __( 'View Recipe', 'gourmet-artist' ),
        'add_new_item'       => __( '', '')
        'add_new'            => __( '', '')
        'edit_item'          => __( '', '')
        'update_item'








    );


}





?>