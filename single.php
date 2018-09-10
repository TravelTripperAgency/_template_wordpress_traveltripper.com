<?php
/**
 * The template for displaying regular, single, posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Travel_Tripper
 */

get_header(); ?>

<div class="content-sidebar-wrap"> <?php

    get_sidebar( 'secondary' ); ?>

    <main class="content"> <?php

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; ?>

        <div class="post-cta">
          <div class="post-cta__wrap">
            <p class="post-cta__title">Stay on top of hotel distribution and marketing trends.</p>
            <p>Sign up for Travel Tripper's newsletter to get the latest news, tips, and resources delivered to your inbox.</p>
            <a href="#" class="btn btn-primary">subscribe</a>
          </div>
        </div> <?php

        related_posts(); ?>

    </main> <?php

    get_sidebar( 'primary' ); ?>

</div> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
