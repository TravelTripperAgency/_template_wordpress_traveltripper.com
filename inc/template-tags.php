<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Travel_Tripper
 */

if ( ! function_exists( 'traveltripper_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
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

if ( ! function_exists( 'traveltripper_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function traveltripper_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'traveltripper' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'traveltripper_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function traveltripper_entry_footer() {

		if ( 'post' === get_post_type() ) { ?>

            <section class="widget widget-author">
                <a class="img-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><img src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), array('size'=>86)); ?>" alt="<?php the_author(); ?>"></a>
                <div class="author-bio-wrap">
                    <p class="author-name"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></p>
                    <p><?php the_author_meta('description') ?></p>
                </div>
            </section>

            <p class="entry-meta"> <?php

              /* translators: used between list items, there is a space after the comma */
              $categories_list = get_the_category_list( esc_html__( ' ', 'traveltripper' ) );
              if ( $categories_list ) {
                  /* translators: 1: list of categories. */
                  printf( '<span class="entry-categories">' . esc_html__( 'Categories: %1$s', 'traveltripper' ) . '</span>', $categories_list ); // WPCS: XSS OK.
              }

              /* translators: used between list items, there is a space after the comma */
              $tags_list = get_the_tag_list( '', esc_html_x( ' ', 'list item separator', 'traveltripper' ) );
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

if ( ! function_exists( 'traveltripper_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function traveltripper_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) : ?>

			<div class="featured-image"> <?php
                the_post_thumbnail(); ?>
			</div> <?php

        else : ?>

		<a class="featured-image" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;
