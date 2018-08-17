<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap row">
    <div class="page-header__cta">
      <p>Become an expert hotel marketer with our free resources.</p>
      <div class="btn-holder">
        <a class="btn btn-secondary-white" href="#">subscribe</a>
      </div>
    </div>
  </div>
</section>

<section class="widget widget-author">
    <div class="wrap">
        <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array( 'size'=>150 ) ); ?>" alt="<?php the_author(); ?>">
        <div class="author-wrap">
            <div class="author-bio-wrap">
                <p class="author-name"><?php the_author(); ?></p>
                <p><?php the_author_meta( 'description' ); ?></p>
            </div>
            <div class="author-connect">
                <p>Connect</p>
                <div class="d-flex">
                    <a href="<?php the_author_meta( 'googleplus' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/connect-google-plus.svg" alt="Google Plus Icon"></a>
                    <a href="<?php the_author_meta( 'linkedin' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/connect-linkedin.svg" alt="LinkedIn Icon"></a>
                    <a href="<?php the_author_meta( 'twitter' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/connect-twitter.svg" alt="Twitter Icon"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="content wrap"> <?php

	if ( have_posts() ) :

        // Start the Loop
        while ( have_posts() ) : the_post(); ?>

        <article class="post">
            <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
            <p><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
        </article> <?php

        endwhile;

        // Call Pagination
		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

</main> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
