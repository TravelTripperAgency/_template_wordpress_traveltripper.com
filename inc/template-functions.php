<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Travel_Tripper
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
// add_filter( 'body_class', 'traveltripper_body_classes' );
// function traveltripper_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	// if ( ! is_singular() ) {
	// 	$classes[] = 'hfeed';
	// }

	// Adds a class of no-sidebar when there is no sidebar present.
	// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	// 	$classes[] = 'no-sidebar';
	// }

	// return $classes;
// }


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
add_action( 'wp_head', 'traveltripper_pingback_header' );
function traveltripper_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}


/**
 * Featured Posts
 */
// Add featured meta hook
add_action( 'add_meta_boxes', 'blog_featured_meta' );
function blog_featured_meta() {
    add_meta_box( 'blog_meta', __( 'Featured Post', 'traveltripper' ), 'blog_meta_callback', 'post', 'side', 'default' );
}

// Show the meta box in the dashboard
function blog_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'blog_nonce' );
    $blog_stored_meta = get_post_meta( $post->ID ); ?>
     <p>
        <span class="blog-row-title"><?php _e( 'Check if this is a featured post:', 'traveltripper' )?></span>
        <div class="blog-row-content">
            <label for="featured-checkbox">
                <input type="checkbox" name="featured-checkbox" id="featured-checkbox" value="yes" <?php if ( isset ( $blog_stored_meta['featured-checkbox'] ) ) checked( $blog_stored_meta['featured-checkbox'][0], 'yes' ); ?>>
                <?php _e( 'Featured Post', 'traveltripper' )?>
            </label>
        </div>
    </p> <?php
}

// Saves the featured post meta input
add_action( 'save_post', 'blog_meta_save' );
function blog_meta_save( $post_id ) {

    // Checks save status - overcome autosave, etc.
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'blog_nonce' ] ) && wp_verify_nonce( $_POST[ 'blog_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

    // Checks for input and save
    if( isset( $_POST[ 'featured-checkbox' ] ) ) {
        update_post_meta( $post_id, 'featured-checkbox', 'yes' );
    } else {
        update_post_meta( $post_id, 'featured-checkbox', 'no' );
    }

}


/**
 * Add class to `the_excerpt()`
 */
add_filter( "the_excerpt", "add_class_to_excerpt" );
function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="entry-content"', $excerpt);
}


/**
 * Add LinkedIn to user contact fields.
 */
add_filter( 'user_contactmethods', 'linkedin_contact_info' );
function linkedin_contact_info( $fields ) {
    $fields['linkedin'] = __( 'LinkedIn' );
    return $fields;
}


/**
 * Add <strong> tags around category and tag titles.
 */
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = 'Category<strong>: ' . single_cat_title( '', false ) . '</strong>';
    } elseif ( is_tag() ) {
        $title = 'Tag<strong>: ' . single_tag_title( '', false ) . '</strong>';
    }

    return $title;
}


/**
 * Remove paragraph tags from category_description().
 */
remove_filter('term_description','wpautop');


/**
 * Edit default search widget in sidebar.
 */
add_filter( 'get_search_form', 'custom_search_form', 100 );
function custom_search_form( $form ) {
    $form = '<form role="search" method="get" class="search-form" action="' . home_url( '/' ) . '" >
    <div class="search-form__wrap">
        <label>
            <span class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</span>
            <input type="search" class="search-field" placeholder="Search" value="' . get_search_query() . '" name="s">
        </label>
        <button type="submit" class="search-submit" value="Search"><span class="screen-reader-text">Search button</span></button>
        </div>
    </form>';

    return $form;
}



/**
 * Exclude featured posts from the main query
 *
 * The filter works, but is breaking pagination so the add_action is commented.
 * We are leaving it here for reference should we need it.
 */
// add_action( 'pre_get_posts', 'exclude_featured_post' );
function exclude_featured_post( $query ) {
    if ( $query->is_home() && $query->is_main_query()) {
        if ( $query->is_main_query()) {
            // In case there is already a meta query set somewhere else...
            $meta_query = $query->get('meta_query')? : [];

            // append this one.
            $meta_query[] = [
                'meta_query' => array(
                    array(
                        'key' => 'featured-checkbox',
                        'value' => 'yes'
                    )
                )
            ];

            $query->set('meta_query', $meta_query);

        }

    }

}
