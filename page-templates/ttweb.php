<?php
/**
 * The template for displaying the TTWeb page.
 *
 * Template Name: TTWeb
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
    <div class="wrap row">
        <div class="page-header__title-area<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>">
            <h1 class="page-header__title"><?php the_title(); ?></h1> <?php
            if ( get_field( 'header_subtitle' ) ) { ?>
                <p class="page-header__subtitle"><?php the_field( 'header_subtitle' ); ?></p> <?php
            }
            if ( get_field( 'header_description' ) ) { ?>
                <p class="page-header__description"><?php the_field( 'header_description' ); ?></p> <?php
            } ?>
            <div class="btn-holder">
                <a class="btn btn-primary" id="demo-click-3" href="http://try.traveltripper.com/request-demo/">request a demo</a>
            </div>
        </div>
        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-ttweb-header.png"> <?php
            } ?>
            <ul class="page-header__features"> <?php
                while ( have_rows( 'header_features' ) ) : the_row(); ?>
                    <li><?php the_sub_field( 'header_feature' ); ?></li> <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
</section>

<section class="intro">
    <div class="wrap row">

        <div class="col-right">

            <h2 class="section-title"><?php the_field( 'ttweb_intro_section_title' ); ?></h2>

            <div class="row col-right__top"> <?php
                the_field( 'ttweb_intro_section_description' ); ?>
            </div>

            <div class="row col-right__middle"> <?php
                while ( have_rows( 'ttweb_intro_services' ) ) : the_row(); ?>
                    <p><?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); the_sub_field( 'text' ); ?></p> <?php
                endwhile; ?>
            </div>

            <div class="row col-right__bottom">
                <ul> <?php
                    while ( have_rows( 'ttweb_intro_services_bullets' ) ) : the_row(); ?>
                        <li><?php the_sub_field( 'text' ); ?></li> <?php
                    endwhile; ?>
                </ul>
            </div>

            <div class="btn-holder">
                <a href="<?php if ( get_field ( 'ttweb_intro_button_link' ) ) { the_field( 'ttweb_intro_button_link' ); } else { echo 'javascript:void(0);'; } ?>" id="product-specs-view-1" class="btn btn-primary-white"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-pdf.svg" alt="pdf icon"><?php the_field( 'ttweb_intro_button_text' ); ?></a>
            </div>

        </div>

        <div class="col-left">
            <div class="video-container"> <?php
                the_field( 'ttweb_intro_video' ); ?>
            </div>
        </div>

    </div>
</section>

<section class="spacer background-image"></section>

<section class="full-service">
    <div class="wrap row">

        <div class="col-left">
            <h2 class="section-title"><?php the_field( 'ttweb_services_section_title' ); ?></h2> <?php
            the_field( 'ttweb_services_section_description' ); ?>
        </div>

        <div class="col-right row"> <?php
            while ( have_rows( 'ttweb_services_services' ) ) : the_row(); ?>
                <p><?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); the_sub_field( 'text' ); ?></p> <?php
            endwhile; ?>
        </div>

    </div>
</section>

<section class="clients"> <?php

    get_template_part( 'template-parts/content', 'client-slider' ); ?>

</section>

<section class="awards">
    <div class="wrap">

        <div class="row">

        <div class="col-left">
            <figure<?php if ( get_field( 'ttweb_awards_image_caption' ) ) { echo ' class="wp-caption"'; } ?>> <?php
                echo wp_get_attachment_image( get_field( 'ttweb_awards_image' ), 'full' );
                if ( get_field( 'ttweb_awards_image_caption' ) ) { ?>
                    <figcaption class="wp-caption-text"><?php the_field( 'ttweb_awards_image_caption' ); ?></figcaption> <?php
                } ?>
            </figure>
        </div>

        <div class="col-right">
            <h2 class="section-title"><?php the_field( 'ttweb_awards_section_title' ); ?></h2> <?php
            the_field( 'ttweb_awards_section_description' ); ?>
        </div>

        </div>

        <div class="row award-images"> <?php
            while ( have_rows( 'ttweb_awards_awards' ) ) : the_row(); ?>
                <div class="award"> <?php
                    if ( get_sub_field( 'link' ) ) { ?>
                        <a href="<?php the_sub_field( 'link' ); ?>"> <?php
                    }
                    echo wp_get_attachment_image( get_sub_field( 'logo' ), 'full' );
                    if ( get_sub_field( 'link' ) ) { ?>
                        </a> <?php
                    } ?>
                </div> <?php
            endwhile; ?>
        </div>

    </div>
</section>

<section class="conversion row">

    <div class="col-left">

        <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInLeft"'; } ?>> <?php
            echo wp_get_attachment_image( get_field( 'ttweb_case_study_showcase_image' ), 'full' ); ?>
        </figure>

        <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>" data-wow-delay=".5s">
            <div class="showcase__metrix">
                <p class="showcase__metrix-number"><?php the_field( 'ttweb_case_study_showcase_metric_number' ); ?></p>
                <p class="showcase__metrix-text"><?php the_field( 'ttweb_case_study_showcase_metric_text' ); ?></p>
                <a id="case-click-2" href="<?php the_field( 'ttweb_case_study_showcase_button_link' ); ?>" class="btn btn-primary"><?php the_field( 'ttweb_case_study_showcase_button_text' ); ?></a>
            </div>
            <div class="showcase__description">
                <p><?php the_field( 'ttweb_case_study_showcase_description' ); ?></p>
            </div>
        </div>

    </div>

    <div class="col-right">

        <div class="testimonial<?php if ( !wp_is_mobile() ) { echo ' animated wow fadeIn'; } ?>" data-wow-delay=".5s">
            <p class="quote"><?php the_field( 'ttweb_case_study_testimonial_quote' ); ?></p>
            <p class="cite"><?php the_field( 'ttweb_case_study_testimonial_attribution' ); ?></p>
        </div> <?php

        if ( get_field( 'ttweb_case_study_award_link' ) ) { ?>
            <a href="<?php the_field( 'ttweb_case_study_award_link' ); ?>"> <?php
        }
        echo wp_get_attachment_image( get_field( 'ttweb_case_study_award_image' ), 'full' );
        if ( get_field( 'ttweb_case_study_award_link' ) ) { ?>
            </a> <?php
        } ?>

    </div>

</section>

<section class="spacer-2 background-image"></section>

<section class="services">
  <div class="wrap row">

    <div class="title-row">
      <h2 class="section-title"><?php echo strip_tags( get_field( 'ttweb_other_solutions_section_title' ), '<a><em>' ); ?></h2>
      <p class="section-subtitle"><?php echo strip_tags( get_field( 'ttweb_other_solutions_section_description' ), '<a><em><strong>' ); ?></p>
    </div>

    <figure> <?php
        echo wp_get_attachment_image( get_field( 'ttweb_other_solutions_image' ), 'full' ); ?>
    </figure>

    <div class="row">
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-magnifying-glass-blue.svg" alt="magnifying glass icon">
        <p>Generate Demand</p>
      </div>
      <div class="col">
        <img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow-blue.svg" alt="arrow icon">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-eye.svg" alt="eye icon">
        <p>Optimize Conversions</p>
      </div>
      <div class="col">
        <img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow-blue.svg" alt="arrow icon">
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-bed.svg" alt="bed icon">
        <p>Maximize Revenue</p>
      </div>
    </div>

  </div>
</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
