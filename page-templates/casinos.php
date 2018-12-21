<?php
/**
 * The template for displaying the Casinos page.
 *
 * Template Name: Casinos
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
                <a class="btn btn-primary" id="demo-click-6" href="http://try.traveltripper.com/request-demo/">request a demo</a>
            </div>
        </div>
        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/casinos-header.png"> <?php
            } ?>
            <ul class="page-header__features"> <?php
                while ( have_rows( 'header_features' ) ) : the_row(); ?>
                    <li><?php the_sub_field( 'header_feature' ); ?></li> <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
</section>

<section class="intro wrap">

    <div class="top row">
        <div class="col-left">
            <h2 class="section-title"><?php the_field( 'casinos_intro_section_title' ); ?></h2>
        </div>
        <div class="col-right"> <?php
            the_field( 'casinos_intro_section_description' ); ?>
        </div>
    </div>

    <div class="bottom row"> <?php
        while ( have_rows( 'casinos_intro_services' ) ) : the_row(); ?>
            <div class="col">
                <div class="title-container"> <?php
                    echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full' ); ?>
                    <h3 class="column-title"><?php the_sub_field( 'title' ); ?></h3>
                </div>
                <ul> <?php
                    while ( have_rows( 'bullets' ) ) : the_row(); ?>
                        <li><?php the_sub_field( 'bullet' ); ?></li> <?php
                    endwhile; ?>
                </ul>
            </div> <?php
        endwhile; ?>
    </div>

</section>

<section class="clients background-image">

    <div class="wrap">
        <h2 class="section-title"><?php the_field( 'slider_section_title' ); ?></h2>
    </div> <?php

    get_template_part( 'template-parts/content', 'client-slider' ); ?>

</section>

<section class="casino-integrations row wrap">

    <div class="col-right">
        <h2 class="section-title"><?php the_field( 'casinos_integrations_section_title' ); ?></h2> <?php
        the_field( 'casinos_integrations_section_text' ); ?>
    </div>

    <div class="col-left row"> <?php
        while ( have_rows( 'casinos_integrations_logos' ) ) : the_row(); ?>
            <div class="integrations__logo"><?php echo wp_get_attachment_image( get_sub_field( 'logo' ), 'full' ); ?></div> <?php
        endwhile; ?>
    </div>

</section>

<section class="testimonial-showcase row">

    <div class="col-left wrap<?php if ( !wp_is_mobile() ) { echo ' animated wow fadeIn'; } ?>" data-wow-delay=".5s">
        <div class="testimonial">
            <p class="quote"><?php the_field( 'casinos_study_testimonial_quote' ); ?></p>
            <p class="cite"><?php the_field( 'casinos_study_testimonial_attribution' ); ?></p>
        </div>
    </div>

    <div class="col-right">

        <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInRight"'; } ?>> <?php
            echo wp_get_attachment_image( get_field( 'casinos_study_showcase_image' ), 'full' ); ?>
        </figure>

        <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>" data-wow-delay=".5s">
            <div class="showcase__description">
                <p><?php the_field( 'casinos_study_showcase_description' ); ?></p>
            </div>
            <div class="showcase__metrix">
                <p class="showcase__metrix-number"><?php the_field( 'casinos_study_showcase_metric_number' ); ?></p>
                <p class="showcase__metrix-text"><?php the_field( 'casinos_study_showcase_metric_text' ); ?></p>
                <a href="<?php the_field( 'casinos_study_showcase_button_link' ); ?>" class="btn btn-primary"><?php the_field( 'casinos_study_showcase_button_text' ); ?></a>
            </div>
        </div>

    </div>

</section>

<section class="team background-image">
    <div class="wrap row">

        <div class="col-right">
            <h2 class="section-title"><?php the_field( 'casinos_support_section_title' ); ?></h2> <?php
            the_field( 'casinos_support_content' ); ?>
        </div>

        <div class="col-left">
            <figure<?php if ( get_field( 'casinos_support_image_caption' ) ) { echo ' class="wp-caption"'; } ?>> <?php
                echo wp_get_attachment_image( get_field( 'casinos_support_image' ), 'full' );
                if ( get_field( 'casinos_support_image_caption' ) ) { ?>
                    <figcaption class="wp-caption-text"><?php the_field( 'casinos_support_image_caption' ); ?></figcaption> <?php
                } ?>
            </figure>
        </div>

    </div>
</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
