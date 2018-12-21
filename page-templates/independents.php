<?php
/**
 * The template for displaying the Independents page.
 *
 * Template Name: Independents
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
    <div class="wrap row">
        <div class="page-header__title-area<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>">
            <h1 class="page-header__title"><?php the_title(); ?></h1> <?php
            if ( get_field( 'header_description' ) ) { ?>
                <p class="page-header__description"><?php the_field( 'header_description' ); ?></p> <?php
            } ?>
            <div class="btn-holder">
                <a class="btn btn-primary" id="demo-click-7" href="http://try.traveltripper.com/request-demo/">request a demo</a>
            </div>
        </div>
        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/independent-header.png"> <?php
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
        <h2 class="section-title"><?php the_field( 'independents_intro_section_title' ); ?></h2> <?php
            the_field( 'independents_intro_section_description' ); ?>
    </div>

</section>

<section class="clients">

    <div class="wrap text-center">
        <h2 class="section-title"><?php the_field( 'slider_section_title' ); ?></h2>
    </div> <?php

    get_template_part( 'template-parts/content', 'client-slider' ); ?>

</section>

<section class="ecommerce wrap row">

    <div class="col-right">
        <h2 class="section-title"><?php the_field( 'independents_services_section_title' ); ?></h2> <?php
        the_field( 'independents_services_section_description' ); ?>
    </div>

    <div class="col-left"> <?php
        echo wp_get_attachment_image( get_field( 'independents_services_image' ), 'full' ); ?>
    </div>

</section>

<section class="spacer background-image"></section>

<section class="solutions">

    <div class="wrap text-center">
        <h2 class="section-title"><?php the_field( 'independents_solutions_section_title' ); ?></h2>
    </div>

    <div class="row wrap"> <?php
        while ( have_rows( 'independents_solutions_solutions' ) ) : the_row();

            $post_id = get_sub_field( 'title', false, false ); ?>

            <div class="service"> <?php
                echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); ?>
                <p class="service__title"><a href="<?php echo get_the_permalink( $post_id ); ?>"><?php echo get_the_title( $post_id ); ?></a></p> <?php
                if ( the_sub_field( 'sub_title' ) ) { ?>
                    <p class="service__subtitle"><?php the_sub_field( 'sub_title' ); ?></p> <?php
                } ?>
                <p class="service__description"><?php the_sub_field( 'description' ); ?></p>
                <p class="service__arrow"><a href="<?php echo get_the_permalink( $post_id ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></a></p>
            </div> <?php

        endwhile; ?>
    </div>

</section>

<section class="integrations">

    <div class="row">

        <div class="col-left">

            <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInLeft"'; } ?>> <?php
                echo wp_get_attachment_image( get_field( 'independents_case_study_showcase_image' ), 'full' ); ?>
            </figure>

            <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>" data-wow-delay=".5s">
                <div class="showcase__metrix">
                    <p class="showcase__metrix-number"><?php the_field( 'independents_case_study_showcase_metric_number' ); ?></p>
                    <p class="showcase__metrix-text"><?php the_field( 'independents_case_study_showcase_metric_text' ); ?></p>
                    <a id="case-click-6" href="<?php the_field( 'independents_case_study_showcase_button_link' ); ?>" class="btn btn-primary"><?php the_field( 'independents_case_study_showcase_button_text' ); ?></a>
                </div>
                <div class="showcase__description">
                    <p><?php the_field( 'independents_case_study_showcase_description' ); ?></p>
                </div>
            </div>

        </div>

        <div class="col-right row wrap">

            <div class="col-right__col-left">
                <h2 class="section-title"><?php the_field( 'independents_integrations_section_title' ); ?></h2>
                <a href="<?php the_field( 'independents_integrations_button_link' ); ?>" class="btn btn-secondary-dark"><?php the_field( 'independents_integrations_button_text' ); ?></a>
            </div>

            <div class="col-right__col-right row"> <?php
                while ( have_rows( 'independents_integrations_integrations' ) ) : the_row(); ?>
                    <div class="integration-logo"> <?php echo wp_get_attachment_image( get_sub_field( 'logo' ), 'full' ); ?></div> <?php
                endwhile; ?>
            </div>

        </div>

    </div>

    <div class="col-bottom row wrap">

        <div class="testimonial">
            <p class="quote"><?php the_field( 'independents_case_study_testimonial_quote' ); ?></p>
            <p class="cite"><?php the_field( 'independents_case_study_testimonial_attribution' ); ?></p>
        </div> <?php

        if ( get_field( 'independents_case_study_review_image_link' ) ) { ?>
            <a href="<?php the_field( 'independents_case_study_review_image_link' ); ?>"> <?php
        }
        echo wp_get_attachment_image( get_field( 'independents_case_study_review_image' ), 'full' );
        if ( get_field( 'independents_case_study_review_image_link' ) ) { ?>
            </a> <?php
        } ?>

    </div>

</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
