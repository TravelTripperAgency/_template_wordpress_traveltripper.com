<?php
/**
 * The template for displaying the homepage
 *
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
    <div class="wrap row">

        <div class="page-header__title-area<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>">
            <h1 class="page-header__title"><?php the_title(); ?></h1>
            <p class="page-header__description"><?php the_field( 'header_description' ); ?></p>
            <div class="btn-holder">
                <a class="btn btn-primary" id="learn-more" href="<?php echo get_site_url(); ?>/solutions/">learn more</a>
            </div>
        </div>

        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php

            if ( wp_is_mobile() ) {

                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home-header.png" alt="Travel Tripper Demo Image"> <?php
                }

            } else {

                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'full', array( 'class' => 'video-fallback' ) );
                } else { ?>
                    <img class="video-fallback" src="<?php echo get_template_directory_uri(); ?>/images/home-header.png" alt="Travel Tripper Demo Image"> <?php
                } ?>

                <div class="video-container">
                    <div class="laptop">
                        <video id="laptop-video" class="d-sm-block" muted>
                            <source src="<?php echo get_template_directory_uri(); ?>/video/laptop.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="phone-container">
                        <div class="phone">
                            <video id="phone-video" class="d-sm-block" muted>
                                <source src="<?php echo get_template_directory_uri(); ?>/video/phone.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div> <?php
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
  <div class="row">

    <div class="col-right">
      <div class="col-right__wrap">
        <div class="col-right__col-left<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInUp'; } ?>">
          <h2 class="section-title"><?php the_field( 'frontpage_intro_section_title' ); ?></h2> <?php
          the_field( 'frontpage_intro_section_text' ); ?>
        </div>
        <div class="col-right__col-right<?php if ( !wp_is_mobile() ) { echo ' animated wow fadeIn'; } ?>" data-wow-delay=".5s">
          <div class="testimonial">
            <p class="quote"><?php the_field( 'frontpage_intro_testimonial_quote' ); ?></p>
            <p class="cite"><?php the_field( 'frontpage_intro_testimonial_attribution' ); ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-left">

      <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInLeft"'; } ?>> <?php
        $showcase_image = get_field( 'frontpage_intro_showcase_image' );
        echo wp_get_attachment_image( $showcase_image, 'full' ); ?>
      </figure>

      <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>" data-wow-delay=".5s">
        <div class="showcase__metrix">
          <p class="showcase__metrix-number"><?php the_field( 'frontpage_intro_showcase_metric_number' ); ?></p>
          <p class="showcase__metrix-text"><?php the_field( 'frontpage_intro_showcase_metric_text' ); ?></p>
          <a id="case-click-0" href="<?php esc_url( the_field( 'frontpage_intro_showcase_button_link' ) ); ?>" class="btn btn-primary"><?php the_field( 'frontpage_intro_showcase_button_text' ); ?></a>
        </div>
        <div class="showcase__description">
          <p><?php the_field( 'frontpage_intro_showcase_description' ); ?></p>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="services background-image">

    <h2 class="section-title"><?php the_field( 'frontpage_solutions_section_title' ); ?></h2>

    <div class="row wrap">
        <div class="service"> <?php
            $solution_1_image = get_field( 'frontpage_solutions_solution_1_image' );
            echo wp_get_attachment_image( $solution_1_image, 'full' ); ?>
            <p class="service__title"><a href="<?php the_field( 'frontpage_solutions_solution_1_link' ); ?>"><?php the_field( 'frontpage_solutions_solution_1_title' ); ?></a></p>
            <p class="service__subtitle"><?php the_field( 'frontpage_solutions_solution_1_subtitle' ); ?></p>
            <p class="service__description"><?php the_field( 'frontpage_solutions_solution_1_description' ); ?></p>
            <p class="service__arrow"><a href="<?php the_field( 'frontpage_solutions_solution_1_link' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow-white.svg"></a></p>
        </div>
        <div class="service"> <?php
            $solution_2_image = get_field( 'frontpage_solutions_solution_2_image' );
            echo wp_get_attachment_image( $solution_2_image, 'full' ); ?>
            <p class="service__title"><a href="<?php the_field( 'frontpage_solutions_solution_2_link' ); ?>"><?php the_field( 'frontpage_solutions_solution_2_title' ); ?></a></p>
            <p class="service__subtitle"><?php the_field( 'frontpage_solutions_solution_2_subtitle' ); ?></p>
            <p class="service__description"><?php the_field( 'frontpage_solutions_solution_2_description' ); ?></p>
            <p class="service__arrow"><a href="<?php the_field( 'frontpage_solutions_solution_2_link' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow-white.svg"></a></p>
        </div>
        <div class="service"> <?php
            $solution_3_image = get_field( 'frontpage_solutions_solution_3_image' );
            echo wp_get_attachment_image( $solution_3_image, 'full' ); ?>
            <p class="service__title"><a href="<?php the_field( 'frontpage_solutions_solution_3_link' ); ?>"><?php the_field( 'frontpage_solutions_solution_3_title' ); ?></a></p>
            <p class="service__subtitle"><?php the_field( 'frontpage_solutions_solution_3_subtitle' ); ?></p>
            <p class="service__description"><?php the_field( 'frontpage_solutions_solution_3_description' ); ?></p>
            <p class="service__arrow"><a href="<?php the_field( 'frontpage_solutions_solution_3_link' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow-white.svg"></a></p>
        </div>
    </div>

</section>

<section class="clients">

    <h2 class="section-title"><?php the_field( 'frontpage_client_slider_section_title' ); ?></h2> <?php

    get_template_part( 'template-parts/content', 'client-slider' ); ?>

</section>

<section class="spacer background-image"></section>

<section class="customers">

    <div class="wrap">
        <p class="section-title"><?php the_field( 'frontpage_who_section_title' ); ?></p>
        <p class="section-subtitle"><?php the_field( 'frontpage_who_section_subtitle' ); ?></p>
    </div>

    <div class="row wrap">

        <div class="customer"> <?php
            $customer_1_image = get_field( 'frontpage_who_we_serve_1_image' );
            echo wp_get_attachment_image( $customer_1_image, 'full' ); ?>
            <p class="customer__title"><a href="<?php the_field( 'frontpage_who_we_serve_1_href' ); ?>"><?php the_field( 'frontpage_who_we_serve_1_title' ); ?></a></p>
            <p class="customer__description"><?php the_field( 'frontpage_who_we_serve_1_description' ); ?></p>
            <p class="customer__arrow"><a href="<?php the_field( 'frontpage_who_we_serve_1_href' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></a></p>
        </div>

        <div class="customer"> <?php
            $customer_2_image = get_field( 'frontpage_who_we_serve_2_image' );
            echo wp_get_attachment_image( $customer_2_image, 'full' ); ?>
            <p class="customer__title"><a href="<?php the_field( 'frontpage_who_we_serve_2_href' ); ?>"><?php the_field( 'frontpage_who_we_serve_2_title' ); ?></a></p>
            <p class="customer__description"><?php the_field( 'frontpage_who_we_serve_2_description' ); ?></p>
            <p class="customer__arrow"><a href="<?php the_field( 'frontpage_who_we_serve_2_href' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></a></p>
        </div>

        <div class="customer"> <?php
            $customer_3_image = get_field( 'frontpage_who_we_serve_3_image' );
            echo wp_get_attachment_image( $customer_3_image, 'full' ); ?>
            <p class="customer__title"><a href="<?php the_field( 'frontpage_who_we_serve_3_href' ); ?>"><?php the_field( 'frontpage_who_we_serve_3_title' ); ?></a></p>
            <p class="customer__description"><?php the_field( 'frontpage_who_we_serve_3_description' ); ?></p>
            <p class="customer__arrow"><a href="<?php the_field( 'frontpage_who_we_serve_3_href' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></a></p>
        </div>

        <div class="customer"> <?php
            $customer_4_image = get_field( 'frontpage_who_we_serve_4_image' );
            echo wp_get_attachment_image( $customer_4_image, 'full' ); ?>
            <p class="customer__title"><a href="<?php the_field( 'frontpage_who_we_serve_4_href' ); ?>"><?php the_field( 'frontpage_who_we_serve_4_title' ); ?></a></p>
            <p class="customer__description"><?php the_field( 'frontpage_who_we_serve_4_description' ); ?></p>
            <p class="customer__arrow"><a href="<?php the_field( 'frontpage_who_we_serve_4_href' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></a></p>
        </div>

    </div>

</section> <?php

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
