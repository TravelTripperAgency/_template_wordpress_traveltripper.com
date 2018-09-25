<?php
/**
 * Register Custom Taxonomies
 *
 * @package Travel_Tripper
 */

// Register Resources Tags
add_action( 'init', 'register_resource_tag', 0 );
function register_resource_tag() {
	register_taxonomy( 'resource_tag', 'resources', array(
		'labels'            => array(
    		'name'                       => _x( 'Resource Tags', 'Taxonomy General Name', 'traveltripper' ),
    		'singular_name'              => _x( 'Resource Tag', 'Taxonomy Singular Name', 'traveltripper' ),
    		'menu_name'                  => __( 'Resource Tags', 'traveltripper' ),
    		'all_items'                  => __( 'All Resource Tags', 'traveltripper' ),
    		'parent_item'                => __( 'Parent Item', 'traveltripper' ),
    		'parent_item_colon'          => __( 'Parent Item:', 'traveltripper' ),
    		'new_item_name'              => __( 'New Resource Tag Name', 'traveltripper' ),
    		'add_new_item'               => __( 'Add New Resource Tag', 'traveltripper' ),
    		'edit_item'                  => __( 'Edit Resource Tag', 'traveltripper' ),
    		'update_item'                => __( 'Update Resource Tag', 'traveltripper' ),
    		'view_item'                  => __( 'View Resource Tag', 'traveltripper' ),
    		'separate_items_with_commas' => __( 'Separate items with commas', 'traveltripper' ),
    		'add_or_remove_items'        => __( 'Add or remove items', 'traveltripper' ),
    		'choose_from_most_used'      => __( 'Choose from the most used', 'traveltripper' ),
    		'popular_items'              => __( 'Popular Items', 'traveltripper' ),
    		'search_items'               => __( 'Search Items', 'traveltripper' ),
    		'not_found'                  => __( 'Not Found', 'traveltripper' ),
    		'no_terms'                   => __( 'No items', 'traveltripper' ),
    		'items_list'                 => __( 'Items list', 'traveltripper' ),
    		'items_list_navigation'      => __( 'Items list navigation', 'traveltripper' ),
    	),
		'hierarchical'      => false,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud'     => true,
        'rewrite'           => array(
    		'slug'         => 'resources/tag',
		    'with_front'   => false,
    		'hierarchical' => false,
    	),
	) );

}
