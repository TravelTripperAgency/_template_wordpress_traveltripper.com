<?php
/**
 * Register All Post Types
 *
 * @package Travel_Tripper
 */

// Register Resources Post Type
add_action( 'init', 'resources_post_type', 0 );
function resources_post_type() {
	register_post_type( 'resources', array(
		'label'                 => __( 'Resource', 'traveltripper' ),
		'description'           => __( 'Post Type Description', 'traveltripper' ),
		'labels'                => array(
    		'name'                  => _x( 'Resources', 'Post Type General Name', 'traveltripper' ),
    		'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'traveltripper' ),
    		'menu_name'             => __( 'Resources', 'traveltripper' ),
    		'name_admin_bar'        => __( 'Resource', 'traveltripper' ),
    		'archives'              => __( 'Resource Archives', 'traveltripper' ),
    		'attributes'            => __( 'Resource Attributes', 'traveltripper' ),
    		'parent_item_colon'     => __( 'Parent Resource:', 'traveltripper' ),
    		'all_items'             => __( 'All Resources', 'traveltripper' ),
    		'add_new_item'          => __( 'Add New Resource', 'traveltripper' ),
    		'add_new'               => __( 'Add New', 'traveltripper' ),
    		'new_item'              => __( 'New Resource', 'traveltripper' ),
    		'edit_item'             => __( 'Edit Resource', 'traveltripper' ),
    		'update_item'           => __( 'Update Resource', 'traveltripper' ),
    		'view_item'             => __( 'View Resource', 'traveltripper' ),
    		'view_items'            => __( 'View Resources', 'traveltripper' ),
    		'search_items'          => __( 'Search Resource', 'traveltripper' ),
    		'not_found'             => __( 'Not found', 'traveltripper' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'traveltripper' ),
    		'featured_image'        => __( 'Featured Image', 'traveltripper' ),
    		'set_featured_image'    => __( 'Set Featured Image', 'traveltripper' ),
    		'remove_featured_image' => __( 'Remove Featured Image', 'traveltripper' ),
    		'use_featured_image'    => __( 'Use as Featured Image', 'traveltripper' ),
    		'insert_into_item'      => __( 'Insert into Resource', 'traveltripper' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this Resource', 'traveltripper' ),
    		'items_list'            => __( 'Resources list', 'traveltripper' ),
    		'items_list_navigation' => __( 'Resources list navigation', 'traveltripper' ),
    		'filter_items_list'     => __( 'Filter Resources list', 'traveltripper' ),
    	),
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	) );
}

// Register News Post Type
add_action( 'init', 'news_post_type', 0 );
function news_post_type() {
	register_post_type( 'news-and-press', array(
		'label'                 => __( 'News', 'traveltripper' ),
		'description'           => __( 'Post Type Description', 'traveltripper' ),
		'labels'                => array(
    		'name'                  => _x( 'News', 'Post Type General Name', 'traveltripper' ),
    		'singular_name'         => _x( 'News', 'Post Type Singular Name', 'traveltripper' ),
    		'menu_name'             => __( 'News', 'traveltripper' ),
    		'name_admin_bar'        => __( 'News', 'traveltripper' ),
    		'archives'              => __( 'News Archives', 'traveltripper' ),
    		'attributes'            => __( 'News Attributes', 'traveltripper' ),
    		'parent_item_colon'     => __( 'Parent News:', 'traveltripper' ),
    		'all_items'             => __( 'All News Items', 'traveltripper' ),
    		'add_new_item'          => __( 'Add News Item', 'traveltripper' ),
    		'add_new'               => __( 'Add News', 'traveltripper' ),
    		'new_item'              => __( 'New News Item', 'traveltripper' ),
    		'edit_item'             => __( 'Edit News Item', 'traveltripper' ),
    		'update_item'           => __( 'Update News Item', 'traveltripper' ),
    		'view_item'             => __( 'View News Item', 'traveltripper' ),
    		'view_items'            => __( 'View News Items', 'traveltripper' ),
    		'search_items'          => __( 'Search News Item', 'traveltripper' ),
    		'not_found'             => __( 'Not found', 'traveltripper' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'traveltripper' ),
    		'featured_image'        => __( 'Featured Image', 'traveltripper' ),
    		'set_featured_image'    => __( 'Set Featured Image', 'traveltripper' ),
    		'remove_featured_image' => __( 'Remove Featured Image', 'traveltripper' ),
    		'use_featured_image'    => __( 'Use as Featured Image', 'traveltripper' ),
    		'insert_into_item'      => __( 'Insert into News Item', 'traveltripper' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this News Item', 'traveltripper' ),
    		'items_list'            => __( 'News list', 'traveltripper' ),
    		'items_list_navigation' => __( 'News list navigation', 'traveltripper' ),
    		'filter_items_list'     => __( 'Filter News list', 'traveltripper' ),
    	),
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-paperclip',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	) );
}

// Register Events Post Type
add_action( 'init', 'events_post_type', 0 );
function events_post_type() {

	register_post_type( 'events', array(
		'label'                 => __( 'Event', 'traveltripper' ),
		'description'           => __( 'Post Type Description', 'traveltripper' ),
		'labels'                => array(
    		'name'                  => _x( 'Events', 'Post Type General Name', 'traveltripper' ),
    		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'traveltripper' ),
    		'menu_name'             => __( 'Events', 'traveltripper' ),
    		'name_admin_bar'        => __( 'Event', 'traveltripper' ),
    		'archives'              => __( 'Event Archives', 'traveltripper' ),
    		'attributes'            => __( 'Event Attributes', 'traveltripper' ),
    		'parent_item_colon'     => __( 'Parent Event:', 'traveltripper' ),
    		'all_items'             => __( 'All Events', 'traveltripper' ),
    		'add_new_item'          => __( 'Add New Event', 'traveltripper' ),
    		'add_new'               => __( 'Add New', 'traveltripper' ),
    		'new_item'              => __( 'New Event', 'traveltripper' ),
    		'edit_item'             => __( 'Edit Event', 'traveltripper' ),
    		'update_item'           => __( 'Update Event', 'traveltripper' ),
    		'view_item'             => __( 'View Event', 'traveltripper' ),
    		'view_items'            => __( 'View Events', 'traveltripper' ),
    		'search_items'          => __( 'Search Event', 'traveltripper' ),
    		'not_found'             => __( 'Not found', 'traveltripper' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'traveltripper' ),
    		'insert_into_item'      => __( 'Insert into Event', 'traveltripper' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'traveltripper' ),
    		'items_list'            => __( 'Events list', 'traveltripper' ),
    		'items_list_navigation' => __( 'Events list navigation', 'traveltripper' ),
    		'filter_items_list'     => __( 'Filter Events list', 'traveltripper' ),
    	),
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
        'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	) );

}
