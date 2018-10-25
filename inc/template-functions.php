<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Travel_Tripper
 */


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
        <div class="blog-row-content">
            <label for="featured-checkbox">
                <input type="checkbox" name="featured-checkbox" id="featured-checkbox" value="yes" <?php if ( isset ( $blog_stored_meta['featured-checkbox'] ) ) checked( $blog_stored_meta['featured-checkbox'][0], 'yes' ); ?>>
                <?php _e( 'Featured Post', 'traveltripper' )?>
            </label>
            <br>
            <label for="popular-checkbox">
                <input type="checkbox" name="popular-checkbox" id="popular-checkbox" value="yes" <?php if ( isset ( $blog_stored_meta['popular-checkbox'] ) ) checked( $blog_stored_meta['popular-checkbox'][0], 'yes' ); ?>>
                <?php _e( 'Popular Post', 'traveltripper' )?>
            </label>
        </div>
    </p> <?php
}

// Saves the featured post meta input
add_action( 'save_post', 'blog_featured_meta_save' );
function blog_featured_meta_save( $post_id ) {

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

    if( isset( $_POST[ 'popular-checkbox' ] ) ) {
        update_post_meta( $post_id, 'popular-checkbox', 'yes' );
    } else {
        update_post_meta( $post_id, 'popular-checkbox', 'no' );
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
 * Shorten output of `the_excerpt()`
 */
add_filter( 'excerpt_length', 'custom_excerpt_length', 99 );
function custom_excerpt_length( $length ) {
    return 20;
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
    } elseif ( is_tax( 'resource_tag' ) ) {
        $title = 'Tag<strong>: ' . single_tag_title( '', false ) . '</strong>';
    }

    return $title;
}


/**
 * Remove paragraph tags from category_description().
 */
remove_filter( 'term_description', 'wpautop' );


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
 * Change number of posts for Resources archive
 */
add_action( 'pre_get_posts', 'resources_posts_per_page' );
function resources_posts_per_page( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'resources' ) ) {
    $query->set( 'posts_per_page', '12' );
  }
}


/**
 * Add custom header scripts to wp_head()
 */
add_action( 'wp_head', 'traveltripper_header_scripts', 999 );
function traveltripper_header_scripts() {
    if ( get_field( 'page_header_scripts' ) ) {
        the_field( 'page_header_scripts' );
    }
    if ( get_field( 'global_header_scripts', 'options' ) ) {
        the_field( 'global_header_scripts', 'options' );
    }
}


/**
 * Add custom footer scripts to wp_footer()
 */
add_action( 'wp_footer', 'traveltripper_footer_scripts', 999 );
function traveltripper_footer_scripts() {
    if ( get_field( 'page_footer_scripts' ) ) {
        the_field( 'page_footer_scripts' );
    }
    if ( get_field( 'global_footer_scripts', 'options' ) ) {
        the_field( 'global_footer_scripts', 'options' );
    }
}


/**
 * Add GTM script
 */
add_action( 'wp_head', 'google_tag_manager_script', 1 );
function google_tag_manager_script() {
    if ( get_field( 'google_tag_manager', 'options' ) ) {
        the_field( 'google_tag_manager', 'options' );
    }
}
function google_tag_manager_noscript() {
    // function called in header.php
    if ( get_field( 'google_tag_manager_noscript', 'options' ) && get_field( 'google_tag_manager', 'options' ) ) {
        the_field( 'google_tag_manager_noscript', 'options' );
    }
}


/**
 * Custom navigation menu function
 *
 * Example usage: `traveltripper_custom_menu( 'header' )`;
 * Check register_nav_menus() in functions.php for menu names
 */
function traveltripper_custom_menu( $theme_location ) {
    if ( ( $theme_location ) && ( $locations = get_nav_menu_locations() ) && isset( $locations[$theme_location] ) ) {
        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items( $menu->term_id );
        $count = 0;
        $submenu = false;
        $custom_classes = '';

        // Loop all the items to check for current page
        $current_post_id = get_the_id();
        $current_menu_id = '';
        foreach ( $menu_items as $current_item ) {
            if ( $current_post_id == $current_item->object_id ) {
                if ( !$current_item->menu_item_parent ) {
                    $current_post_id = $current_item->ID;
                } else {
                    $current_post_id = $current_item->menu_item_parent;
                }
                $current_menu_id = $current_item->ID;
                break;
            }
        }

        // Add container class
        if ( $theme_location == 'menu-header' ) {
            $menu_list = '<nav class="site-header__nav">' . "\n";
        } elseif ( $theme_location == 'menu-mobile' ) {
            $menu_list = '<nav class="mobile-nav__main">' . "\n";
        } else {
            $menu_list = '<nav>' . "\n";
        }

        $menu_list .= '<ul>' ."\n";

        // Start the menu loop
        foreach ( $menu_items as $menu_item ) {

            $title = $menu_item->title;
            $link = $menu_item->url;

            // Check for "Open link in a new tab"
            $target = '';
            if ( !empty( $menu_item->target ) ) {
                $target = ' target="_blank"';
            }

            $description = $menu_item->description;
            $icon = get_field( 'navigation_icon', $menu_item );
            $class_names = 'menu-item';

            // Check for custom classes and add to $class_names
            $custom_classes = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $menu_item->classes ), $menu_item) ) );
            if ( !empty( $custom_classes ) ) {
                $class_names .= ' ' . $custom_classes;
            }

            // If this $menu_item is the current page add `current-menu-item` to $class_names
            $menu_item->ID == $current_menu_id ? $class_names .= ' current-menu-item' : $class_names .= '';

            // Check for "Link Relationship (XFN)"
            $xfn = $menu_item->xfn;
            $relationship = '';
            if ( !empty( $xfn ) ) {
                $relationship = ' rel="' . $xfn . '"';
            }

            // if $menu_item does _not_ have a parent
            if ( !$menu_item->menu_item_parent ) {
                $parent_id = $menu_item->ID;

                // Check for children
                if ( !empty( $menu_items[$count + 1] ) && $menu_items[ $count + 1 ]->menu_item_parent == $parent_id ) {
                    $menu_list .= '<li class="' . $class_names . ' menu-item-has-children">' . "\n";
                } else {
                    $menu_list .= '<li class="' . $class_names . '">' . "\n";
                }

                if ( $theme_location == 'menu-mobile' ) {
                    $menu_list .= '<div class="menu-item__category">'. "\n";
                }

                if ( $link == '#' ) {
                    $menu_list .= '<a>' . $title . '</a>' . "\n";
                } else {
                    $menu_list .= '<a href="' . $link . '"' . $relationship . $target . '>' . $title . '</a>' . "\n";
                }

                if ( $theme_location == 'menu-mobile' ) {
                    if ( !empty( $menu_items[$count + 1] ) && $menu_items[ $count + 1 ]->menu_item_parent == $parent_id ) {
                        $menu_list .= '<a class="sub-menu-toggle"></a>' . "\n";
                    }
                    $menu_list .= '</div>' . "\n";
                }

            }

            // if $menu_item has a parent (build the sub-menu)
            if ( $parent_id == $menu_item->menu_item_parent ) {

                if ( !$submenu ) {
                    $submenu = true;
                    $menu_list .= '<ul class="sub-menu">' . "\n";
                }

                $menu_list .= '<li class="' . $class_names . '">' . "\n";
                $menu_list .= '<a href="' . $link . '"' . $relationship . $target . '>' . "\n";

                if ( $icon ) {
                    $menu_list .= '<div class="sub-menu__icon"><div class="background-icon ' . $icon . '"></div></div>' . "\n";
                }

                $menu_list .= '<div class="sub-menu__text">' . "\n";
                $menu_list .= '<p class="sub-menu__link-text">' . $title . '</p>' . "\n";

                if ( $description ) {
                    $menu_list .= '<p class="sub-menu__link-description">' . $description . '</p>' . "\n";
                }

                $menu_list .= '</div>' . "\n";
                $menu_list .= '</a>' . "\n";
                $menu_list .= '</li>' ."\n";

                if ( empty( $menu_items[$count + 1] ) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ) {
                    $menu_list .= '</ul>' ."\n";
                    $submenu = false;
                }

            }

            if ( empty( $menu_items[$count + 1] ) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) {
                $menu_list .= '</li>' ."\n";
                $submenu = false;
            }

            $count++;
        }

        $menu_list .= '</ul>' ."\n";
        $menu_list .= '</nav>' ."\n";

    } else {
        $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
    }
    echo $menu_list;
}
