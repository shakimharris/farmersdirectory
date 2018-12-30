<?php 
*/
Plugin Name: Restaurant Plugin & Taxonomies
Plugin URI:
Description: Adds Custom Post Types To Site
Version: 1.0
Author: Shakim Harris
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
add_action ('init', 'ga_restaurant_plug_post_type');


function ga_restaurant_plug_post_type() {
register_post_type('recipe', 
            array(
            'labels' => array(
                'name' => __('Recipe')
            ),  
            'public' => true,
            'has_archive' => true
        )
        );
}





?>