<?php
/**
 * The template for displaying the Rate Match page.
 *
 * Template Name: Rate Match
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
                <a class="btn btn-primary" href="https://try.traveltripper.com/rate-match-request-demo/">request a demo</a>
            </div>
        </div>
        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/rate-match-header.png"> <?php
            } ?>
        </div>
    </div>
</section>

<section class="intro row wrap">

    <div class="col-right">
        <div class="col-right__wrap"> <?php
            while ( have_rows( 'header_features' ) ) : the_row(); ?>
                <p><?php the_sub_field( 'header_feature' ); ?></p> <?php
            endwhile; ?>
        </div>
    </div>

    <div class="col-left">
        <h2 class="section-title"><?php the_field( 'rate_match_intro_section_title' ); ?></h2><?php
        the_field( 'rate_match_intro_section_description' ); ?>
    </div>

</section>

<section class="video wrap">
    <div class="video-container"> <?php
       the_field( 'rate_match_intro_video' ); ?>
    </div>
</section>

<section class="features wrap">
    <ol> <?php
        while ( have_rows( 'rate_match_intro_features' ) ) : the_row(); ?>
            <li><?php the_sub_field( 'feature' ); ?></li> <?php
        endwhile; ?>
    </ol>
    <div class="btn-holder">
        <a href="<?php if ( get_field ( 'rate_match_intro_button_link' ) ) { the_field( 'rate_match_intro_button_link' ); } else { echo 'javascript:void(0);'; } ?>" id="download-button" class="btn btn-primary-white"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-pdf.svg" alt="pdf icon"><?php the_field( 'rate_match_intro_button_text' ); ?></a>
    </div>
</section>

<section class="conversion">
    <div class="background-image">

        <div class="col-left">

            <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInLeft"'; } ?>> <?php
                echo wp_get_attachment_image( get_field( 'rate_match_case_study_showcase_image' ), 'full' ); ?>
            </figure>

            <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>" data-wow-delay=".5s">
                <div class="showcase__metrix">
                    <p class="showcase__metrix-number"><?php the_field( 'rate_match_case_study_showcase_metric_number' ); ?></p>
                    <p class="showcase__metrix-text"><?php the_field( 'rate_match_case_study_showcase_metric_text' ); ?></p>
                    <a href="<?php the_field( 'rate_match_case_study_showcase_button_link' ); ?>" class="btn btn-primary"><?php the_field( 'rate_match_case_study_showcase_button_text' ); ?></a>
                </div>
                <div class="showcase__description">
                    <p><?php the_field( 'rate_match_case_study_showcase_description' ); ?></p>
                </div>
            </div>

        </div>

        <div class="col-right">
            <div class="col-right__wrap">

                <div class="testimonial<?php if ( !wp_is_mobile() ) { echo ' animated wow fadeIn'; } ?>" data-wow-delay=".5s">
                    <p class="quote"><?php the_field( 'rate_match_case_study_testimonial_quote' ); ?></p>
                    <p class="cite"><?php the_field( 'rate_match_case_study_testimonial_attribution' ); ?></p>
                </div> <?php

                if ( get_field( 'rate_match_case_study_image_link' ) ) { ?>
                    <a href="<?php the_field( 'rate_match_case_study_image_link' ); ?>"> <?php
                }
                echo wp_get_attachment_image( get_field( 'rate_match_case_study_image' ), 'full' );
                if ( get_field( 'rate_match_case_study_image_link' ) ) { ?>
                    </a> <?php
                } ?>

            </div>
        </div>

    </div>
</section>

<section class="dashboard row">

    <div class="col-left">
        <div class="wrap">
            <h2 class="section-title"><?php the_field( 'rate_match_dashboard_section_title' ); ?></h2>
            <p class="description"><?php echo strip_tags( get_field( 'rate_match_dashboard_section_description' ), '<a><em><strong>' ); ?></p>
            <div class="row features"> <?php
                while ( have_rows( 'rate_match_dashboard_insights' ) ) : the_row(); ?>
                    <p><?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); the_sub_field( 'text' ); ?></p> <?php
                endwhile; ?>
            </div>
        </div>
    </div>

    <div class="col-right" style="background-image: url('<?php the_field( 'rate_match_dashboard_image' ); ?>');"></div>

</section>

<section class="spacer background-image"></section>

<script>
  var background_image = "url('<?php the_field( 'rate_match_advantages_image' ); ?>')";
</script>

<section id="advantages" class="advantages row">

    <div class="col-right">
        <div class="wrap">
            <h2 class="section-title"><?php the_field( 'rate_match_advantages_section_title' ); ?></h2>
            <div class="description"> <?php
                the_field( 'rate_match_advantages_section_description' ); ?>
            </div>
            <div class="row features"> <?php
                while ( have_rows( 'rate_match_advantages_advantages' ) ) : the_row(); ?>
                    <p><?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); the_sub_field( 'text' ); ?></p> <?php
                endwhile; ?>
            </div>
            <a class="btn btn-primary" href="<?php the_field( 'rate_match_advantages_button_link' ); ?>"><?php the_field( 'rate_match_advantages_button_text' ); ?></a>
        </div>
    </div>

    <div id="advantages-col" class="col-left"></div>

</section> <?php

get_footer();
