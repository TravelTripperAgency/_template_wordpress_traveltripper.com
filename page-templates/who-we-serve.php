<?php
/**
 * The template for displaying the Who We Serve page.
 *
 * Template Name: Who We Serve
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
    <div class="wrap row">
        <div class="page-header__title-area">
            <h1 class="page-header__title"><?php the_title(); ?></h1>
        </div>
        <div class="page-header__feature"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/serve-landing-header.png"> <?php
            } ?>
        </div>
    </div>
</section>

<section class="intro wrap"> <?php

    while( have_rows( 'who_who' ) ) : the_row();

        // Get the post ID from the page title field
        $post_id = get_sub_field( 'title', false, false ); ?>

        <div class="col"> <?php
            echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full' ); ?>
            <p class="title"><a href="<?php echo get_the_permalink( $post_id ); ?>"><?php echo get_the_title($post_id); ?></a></p>
            <p class="description"><?php the_sub_field( 'description' ); ?></p>
            <p class="arrow"><a href="<?php echo get_the_permalink( $post_id ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></a></p>
        </div> <?php

    endwhile; ?>

</section>

<section class="clientele">
  <div class="wrap">

    <header class="section-header">
      <h2 class="section-title"><?php the_field( 'who_clientele_section_title' ); ?></h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/earth-map.png" alt="Map of Earth">
      <p><?php the_field( 'who_clientele_description' ); ?></p>
    </header>

    <div class="row"> <?php

        while ( have_rows( 'who_clientele_client_logos' ) ) : the_row(); ?>

            <div class="col"> <?php
                echo wp_get_attachment_image( get_sub_field( 'client_logo' ), 'full' ); ?>
            </div> <?php

        endwhile; ?>

    </div>

    <div class="testimonial">
        <p class="quote"><?php the_field( 'who_clientele_testimonial' ); ?></p>
        <p class="cite"><?php the_field( 'who_clientele_testimonial_cite' ); ?></p>
    </div>

  </div>
</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_footer();
