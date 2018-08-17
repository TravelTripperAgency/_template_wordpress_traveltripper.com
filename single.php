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
        </div>

        <div class="related-articles">
          <div class="section-title"><p>Related Articles</p></div>
          <div class="row">
            <div class="col-sm-6 col-lg-4">
              <a href="/post/"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt=""></a>
              <p><a href="/post/">6 hotel booking trends we're watching in 2018</a></p>
            </div>
            <div class="col-sm-6 col-lg-4">
              <a href="/post/"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt=""></a>
              <p><a href="/post/">How to encourage guests to write hotel reviews on TripAdvisor, Yelp, Google and Facebook</a></p>
            </div>
            <div class="col-sm-6 col-lg-4">
              <a href="/post/"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt=""></a>
              <p><a href="/post/">5 ways hotels can use behavioral economics to improve conversion rates</a></p>
            </div>
          </div>
        </div>

    </main> <?php

    get_sidebar( 'primary' ); ?>

</div> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
