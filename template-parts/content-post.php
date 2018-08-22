<?php
/**
 * Template part for displaying a post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Tripper
 */

?>

<article <?php post_class(); ?>>

	<header class="entry-header"> <?php
        if ( has_post_thumbnail() ) { ?>
            <div class="featured-image"> <?php
                the_post_thumbnail(); ?>
            </div> <?php
        }
		the_title( '<h1 class="entry-title">', '</h1>' );
		traveltripper_posted_on(); ?>
	</header> <?php

	the_content( sprintf(
		wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'traveltripper' ),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		),
		get_the_title()
	) );

	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'traveltripper' ),
		'after'  => '</div>',
	) ); ?>

	<footer class="entry-footer"> <?php
        traveltripper_entry_footer(); ?>
	</footer>

</article>
