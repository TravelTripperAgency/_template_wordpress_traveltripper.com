<?php
/**
 * The template for displaying News archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title">News & Press</h1>
      <p class="page-header__description">Travel Tripper in the news and our latest press releases and announcements</p>
    </div>
    <div class="page-header__cta">
      <p>Become an expert hotel marketer with our free resources.</p>
      <div class="btn-holder">
        <a class="btn btn-white" href="#">subscribe</a>
      </div>
    </div>
  </div>
</section> <?php

if ( have_posts() ) { ?>

    <section class="featured-news">
        <div class="row"> <?php

        	// Start the Loop
        	while ( have_posts() ) : the_post();

                if ($wp_query->current_post < 6) { ?>
                    <div class="featured-news__item">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    </div> <?php
                }

                if ($wp_query->current_post == 5) { ?>
                        </div>
                    </section>

                    <section class="old-news">
                        <div class="wrap">

                            <div class="old-news__title"><h2>Older News and Announcements</h2></div> <?php
                }

                if ($wp_query->current_post > 5) { ?>
                    <div class="old-news__item">
                        <p class="entry-meta"><time class="entry-time" datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time></p>
                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    </div> <?php
                }
        	endwhile; ?>

            <div class="btn-holder"><a href="#" class="btn btn-secondary-white">load more</a></div>

        </div>
    </section> <?php

} ?>

<section class="pre-footer-links">
  <a class="pre-footer-link" href="#">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="/images/icons/icon-resources.svg" alt="Resources icon">
      <p class="pre-footer-link__headline">Resources</p>
      <p class="pre-footer-link__description">Insights, knowledge, and information to help you dominate the online travel space.<span></span></p>
    </div>
  </a>
  <a class="pre-footer-link" href="/blog/">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="/images/icons/icon-blog.svg" alt="Blog icon">
      <p class="pre-footer-link__headline">Blog</p>
      <p class="pre-footer-link__description">The latest in hotel marketing and distribution trends for independent hotels.<span></span></p>
    </div>
  </a>
  <a class="pre-footer-link" href="/about/careers/">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="/images/icons/icon-careers.svg" alt="Careers icon">
      <p class="pre-footer-link__headline">Careers</p>
      <p class="pre-footer-link__description">We're always on the lookout for talented and ambitious individuals looking to join our growing team.<span></span></p>
    </div>
  </a>
</section> <?php

get_footer();
