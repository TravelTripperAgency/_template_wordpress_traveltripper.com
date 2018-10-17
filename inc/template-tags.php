<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Travel_Tripper
 */

/**
 * Prints HTML with meta information for the current post-date/time.
 */
if ( ! function_exists( 'traveltripper_posted_on' ) ) :
	function traveltripper_posted_on() {

		$time_string = '<time class="entry-time" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		echo $time_string;

	}
endif;

/**
 * Prints HTML with meta information for the current author.
 */
// if ( ! function_exists( 'traveltripper_posted_by' ) ) :
// 	function traveltripper_posted_by() {
// 		$byline = sprintf(
// 			/* translators: %s: post author. */
// 			esc_html_x( 'by %s', 'post author', 'traveltripper' ),
// 			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
// 		);
//
// 		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
//
// 	}
// endif;

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
if ( ! function_exists( 'traveltripper_entry_footer' ) ) :
	function traveltripper_entry_footer() {

		if ( get_post_type() === 'post' ) { ?>

            <section class="widget widget-author">
                <a class="img-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><img src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), array('size'=>86)); ?>" alt="<?php the_author(); ?>"></a>
                <div class="author-bio-wrap">
                    <p class="author-name"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></p>
                    <p><?php the_author_meta('description') ?></p>
                </div>
            </section>

            <p class="entry-meta"> <?php

              $categories_list = get_the_category_list( esc_html__( ' ', 'traveltripper' ) );
              if ( $categories_list ) {
                  /* translators: 1: list of categories. */
                  printf( '<span class="entry-categories">' . esc_html__( 'Categories: %1$s', 'traveltripper' ) . '</span>', $categories_list ); // WPCS: XSS OK.
              }

              // $tags_list = get_the_tag_list( '', esc_html_x( ' ', 'list item separator', 'traveltripper' ) );
              // if ( $tags_list ) {
              //     /* translators: 1: list of tags. */
              //     printf( '<span class="entry-tags">' . esc_html__( 'Tags: %1$s', 'traveltripper' ) . '</span>', $tags_list ); // WPCS: XSS OK.
              // } ?>

            </p> <?php

		}

		if ( get_post_type() === 'resources' ) { ?>

            <p class="entry-meta"> <?php

                $tags_list = get_the_term_list( '', 'resource_tag', esc_html_x( ' ', 'list item separator', 'traveltripper' ) );

                if ( $tags_list ) {
                    /* translators: 1: list of tags. */
                    printf( '<span class="entry-tags">' . esc_html__( 'Tags: %1$s', 'traveltripper' ) . '</span>', $tags_list ); // WPCS: XSS OK.
                } ?>

            </p> <?php

		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'traveltripper' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}
	}
endif;

/**
 * Output the default image.
 * For use in single posts that do not have a featured image set.
 */
if ( ! function_exists( 'traveltripper_default_thumbnail' ) ) :
	function traveltripper_default_thumbnail() {
        echo '<img width="1378" height="776" src="' . get_site_url() . '/wp-content/uploads/2018/08/default@2x.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Travel Tripper" srcset="' . get_site_url() . '/wp-content/uploads/2018/08/default@2x.jpg 1378w, ' . get_site_url() . '/wp-content/uploads/2018/08/default@2x-300x169.jpg 300w, ' . get_site_url() . '/wp-content/uploads/2018/08/default@2x-768x432.jpg 768w, ' . get_site_url() . '/wp-content/uploads/2018/08/default@2x-1024x577.jpg 1024w" sizes="(max-width: 1378px) 100vw, 1378px">';
	}
endif;

/**
 * Get Resources tag name for archive-resources.php template
 */
if ( ! function_exists( 'resources_custom_tag' ) ) :
    function resources_custom_tag() {
        // Get post by post ID.
        if ( !$post = get_post() ) {
            return '';
        }

        // Get post type taxonomies.
        $taxonomies = get_object_taxonomies( $post->post_type, 'objects' );

        $output = array();

        foreach ( $taxonomies as $taxonomy_name => $taxonomy ) {
            // Get the terms.
            $terms = get_the_terms( $post->ID, $taxonomy_name );
            if ( !empty( $terms ) ) {
                $counter = 1;
                foreach ( $terms as $term ) {
                    if ( $counter = 1 ) {
                        $output[] = sprintf( '<p class="entry-category">%1$s</p>',
                            esc_html( $term->name )
                        );
                    }
                    $counter = $counter + 1;
                }
            }
        }
        return implode( '', $output );
    }
endif;

/**
 * Get the current page URL
 */
if ( ! function_exists( 'get_current_url' ) ) :
    function get_current_url() {
        // Check protocol
        $url = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] == 'on' ) ? 'https://' : 'http://';
        // Append server
        $url .= $_SERVER['SERVER_NAME'];
        // Append URI
        $url .= $_SERVER['REQUEST_URI'];

        return trailingslashit( $url );
    }
endif;
