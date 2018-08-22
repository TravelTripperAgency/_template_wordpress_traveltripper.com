<?php
/**
 * The main loop template file.
 *
 * This template is used as the blog page when there is a static front-page.
 * Otherwise this template will be the actual front-page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title">Blog</h1>
      <p class="page-header__description">The latest in marketing and distribution trends for hoteliers</p>
    </div>
    <div class="page-header__cta">
      <p>Become an expert hotel marketer with our free resources.</p>
      <div class="btn-holder">
        <a class="btn btn-white" href="#">subscribe</a>
      </div>
    </div>
  </div>
</section>

<div class="content-sidebar-wrap">

    <main class="content"> <?php

        // Call Featured Articles (from /inc directory)
        if ( !is_paged() ) {
            get_template_part( 'inc/template', 'featured-articles' );
        } ?>

        <div class="latest-articles__title"><h2>The Latest</h2></div> <?php

    	// Start the Loop
    	while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'posts' );

    	endwhile;

        // Call Pagination
        the_posts_pagination(); ?>

    </main> <?php

    get_sidebar( 'primary' ); ?>

</div> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
