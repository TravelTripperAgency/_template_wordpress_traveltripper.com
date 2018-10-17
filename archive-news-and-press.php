<?php
/**
 * The template for displaying News archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title">News & Press</h1>
      <p class="page-header__description">Travel Tripper in the news and our latest press releases and announcements</p>
    </div>
    <div class="page-header__cta">
      <p>Become an expert hotel marketer with our free resources.</p>
      <div class="btn-holder">
        <a class="btn btn-white" href="http://eepurl.com/bI-pnv" rel="nofollow">subscribe</a>
      </div>
    </div>
  </div>
</section> <?php

if ( have_posts() ) {

    if ( !is_paged() ) { ?>
        <section class="featured-news">
            <div class="row"> <?php
    }

	// Start the Loop
	while ( have_posts() ) : the_post();

        if ( !is_paged() && $wp_query->current_post < 6 ) { ?>
            <div class="featured-news__item">
                <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
                <p><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
            </div> <?php
        }

        if ( !is_paged() && $wp_query->current_post == 5 ) { ?>
                </div>
            </section>
            <section class="old-news">
                <div class="wrap">
                    <div class="old-news__title"><h2>Older News and Announcements</h2></div> <?php
        }

        if ( is_paged() ) { ?>
            <section class="old-news">
                <div class="wrap"> <?php
        }

        if ( $wp_query->current_post > 5 || is_paged() ) { ?>
            <div class="old-news__item<?php if ( ($wp_query->current_post +1 ) == ( $wp_query->post_count ) ) { echo ' last'; } ?>">
                <p class="entry-meta"><time class="entry-time" datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time></p>
                <p><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
            </div> <?php
        }
	endwhile;

    the_posts_pagination(); ?>

        </div>
    </section> <?php

}

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
