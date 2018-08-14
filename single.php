<?php
/**
 * The template for displaying all single posts
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

</div>

<section class="pre-footer-links">
    <a class="pre-footer-link" href="#">
      <div class="pre-footer-link__wrapper">
        <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-resources.svg" alt="Resources icon">
        <p class="pre-footer-link__headline">Resources</p>
        <p class="pre-footer-link__description">Insights, knowledge, and information to help you dominate the online travel space.<span></span></p>
      </div>
    </a>
    <a class="pre-footer-link" href="/blog/">
      <div class="pre-footer-link__wrapper">
        <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-blog.svg" alt="Blog icon">
        <p class="pre-footer-link__headline">Blog</p>
        <p class="pre-footer-link__description">The latest in hotel marketing and distribution trends for independent hotels.<span></span></p>
      </div>
    </a>
    <a class="pre-footer-link" href="/about/careers/">
      <div class="pre-footer-link__wrapper">
        <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-careers.svg" alt="Careers icon">
        <p class="pre-footer-link__headline">Careers</p>
        <p class="pre-footer-link__description">We're always on the lookout for talented and ambitious individuals looking to join our growing team.<span></span></p>
      </div>
    </a>
</section> <?php

get_footer();
