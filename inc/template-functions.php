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
add_filter( 'body_class', 'traveltripper_body_classes' );
function traveltripper_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}

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
