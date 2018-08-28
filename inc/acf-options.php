<?php
/**
 * Advanced Custom Fields Options Pages
 *
 * @package Travel_Tripper
 */

if( function_exists('acf_add_options_page') ) {

    /**
     * Add Internal Ad to WordPress Dashboard Menu
     */
	acf_add_options_page(array(
		'page_title' => 'Internal Ads',
        'position' => 21,
        'icon_url' => 'dashicons-megaphone',
        // 'update_button'		=> __('Publish', 'acf'),
        'updated_message'	=> __("Global Ad Updated", 'acf')
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Brad Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'brad-menu-yo',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Brad Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'brad-menu-yo',
	// ));

}
