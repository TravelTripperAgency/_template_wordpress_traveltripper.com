<?php
/**
 * The template for displaying Resources archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title">Resources</h1>
      <p class="page-header__description">Insights, knowledge, and information to help you dominate in the online travel space.</p>
    </div>
    <div class="page-header__cta">
      <p>Become an expert hotel marketer with our free resources.</p>
      <div class="btn-holder">
        <a class="btn btn-white" id="subscribe-1" href="http://eepurl.com/bI-pnv" rel="nofollow">subscribe</a>
      </div>
    </div>
  </div>
</section>

<div class="content-sidebar-wrap">

    <main class="content">

        <h2 class="section-title">Resource Library</h2> <?php

        if ( have_posts() ) {

            // Start the Loop
        	while ( have_posts() ) : the_post(); ?>

                <article <?php post_class( 'post' ); ?>> <?php

                    if ( has_post_thumbnail() ) {
                        if ( get_field( 'resource_link' ) ) { ?>
                            <a href="<?php esc_url( the_field( 'resource_link' ) ); ?>"><?php the_post_thumbnail(); ?></a> <?php
                        } else { ?>
                            <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a> <?php
                        }
                    } else {
                        if ( get_field( 'resource_link' ) ) { ?>
                            <a href="<?php esc_url( the_field( 'resource_link' ) ); ?>"><?php traveltripper_default_thumbnail(); ?></a> <?php
                        } else { ?>
                            <a href="<?php esc_url( the_permalink() ); ?>"><?php traveltripper_default_thumbnail(); ?></a> <?php
                        }
                    }
                    echo resources_custom_tag();
                    if ( get_field( 'resource_link' ) ) { ?>
                        <p class="entry-title"><a href="<?php esc_url( the_field( 'resource_link' ) ); ?>"><?php the_title(); ?></a></p> <?php
                    } else { ?>
                        <p class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p> <?php
                    } ?>
                </article> <?php

            endwhile;

        }

        the_posts_pagination(); ?>

    </main> <?php

    get_sidebar( 'resources' ); ?>

</div> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
