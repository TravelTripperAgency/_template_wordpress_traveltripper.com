<?php
/**
 * The template for displaying the Management Companies page.
 *
 * Template Name: Management Companies
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
                <a class="btn btn-primary" href="https://try.traveltripper.com/request-demo/?utm_source=website&utm_content=hotelgroups">request a demo</a>
            </div>
        </div>
        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/management-companies-header.png"> <?php
            } ?>
            <ul class="page-header__features">
                <li>Best-in-class brand and multi-property management</li>
                <li>Revenue-maximizing features to stay ahead of the competition</li>
            </ul>
        </div>
    </div>
</section>

<section class="intro row wrap">

  <div class="col-left">
    <h2 class="section-title">Best-in-class brand and multi-property management</h2>
  </div>

  <div class="col-right">
    <p>Hotel groups need a flexible and featured-packed multi-property solution that keeps them ahead of the competition when it comes to hotel distribution and marketing trends.</p>
    <p>Travel Tripper's solutions easily allow revenue and marketing managers to manage one, several, or a hundred hotels with ease through our <a href="<?php echo get_site_url(); ?>/solutions/booking-engine/">CRS</a>, <a href="<?php echo get_site_url(); ?>/solutions/hotel-websites/">website</a>, and <a href="<?php echo get_site_url(); ?>/solutions/hotel-digital-marketing/">digital marketing</a> platforms.</p>
  </div>

</section>

<section class="feature wrap">
  <figure>
    <img srcset="<?php echo get_template_directory_uri(); ?>/images/management-companies-feature.png, <?php echo get_template_directory_uri(); ?>/images/management-companies-feature@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/management-companies-feature@2x.png" alt="Featured image">
  </figure>
</section>

<section class="services row wrap">

  <div class="col">
    <div class="title-container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-reztrip-gray.svg" alt="">
      <h3 class="column-title">Revenue Management</h3>
    </div>
    <ul>
      <li>Rates and rooms by channel</li>
      <li>Geographic pricing</li>
      <li>Dynamic pricing rules and enhanced formula-based pricing controls</li>
      <li>Copy-and-paste rate plan management</li>
      <li>Integrated rate-shopping and price-matching with Travel Tripper Rate Match</li>
      <li>Detailed reporting and strategy planning available</li>
    </ul>
  </div>

  <div class="col">
    <div class="title-container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-shopping-cart.svg" alt="">
      <h3 class="column-title">Distribution & E-Commerce</h3>
    </div>
    <ul>
      <li>Comprehensive distribution to all major direct and third-party channels</li>
      <li>Brand and hotel group booking portals available</li>
      <li>Multi-room and multi-rate plan bookings</li>
      <li>Integration with major loyalty programs</li>
    </ul>
  </div>

  <div class="col">
    <div class="title-container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-digital-marketing-gray.svg" alt="">
      <h3 class="column-title">Marketing</h3>
    </div>
    <ul>
      <li>Brand and multi-property websites</li>
      <li>WCAG- and ADA-compliant website and booking engine</li>
      <li>Full-service digital marketing management</li>
      <li>Transparent and detailed marketing analytics and reporting across properties</li>
    </ul>
  </div>

</section>

<section class="clients">

    <h2 class="section-title"><?php the_field( 'slider_section_title' ); ?></h2> <?php

    if ( have_rows( 'slider_images' ) ) { ?>

        <div class="owl-carousel client-slider"> <?php

            while ( have_rows( 'slider_images' ) ) : the_row(); ?>

                <div class="item background-image" style="background-image: url('<?php the_sub_field( 'slider_image' ); ?>');"></div> <?php

            endwhile; ?>

        </div> <?php

    } ?>

</section>

<section class="testimonials row<?php if ( !wp_is_mobile() ) { echo ' animated wow fadeIn'; } ?>" data-wow-delay=".5s">
  <div class="col-left">
    <div class="testimonial">
      <p class="quote">We're running independent resorts. Every resort has its own unique brand. And because of that, we have multiple marketing campaigns that are running in various markets congruently at all times of the year. Those campaigns are aimed at transient vacationers, companies that are booking corporate events, associations that are booking annual conferences, and weddings, and family gatherings. Travel Tripper is a product that helps us achieve our goals for those campaigns.</p>
      <p class="cite">ERIC GOODEN - Marketing Manager, Bellstar Hotels & Resorts</p>
    </div>
  </div>
</section>

<section class="conversions">
  <div class="col-right">

    <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInRight"'; } ?>>
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/management-companies-showcase.png, <?php echo get_template_directory_uri(); ?>/images/management-companies-showcase@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/management-companies-showcase@2x.png" alt="StayWell iPad">
    </figure>

    <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>" data-wow-delay=".5s">
      <div class="showcase__left">
        <p>Since switching to Travel Tripper in 2016, StayWell hotels have experienced consistent increases in rooms, nights, and ADR across all properties.</p>
      </div>
      <div class="showcase__right">
        <p class="showcase__increase"><span>+</span>30%</p>
        <p class="showcase__revenue"> increase in direct website revenue</p>
        <a href="#" class="btn btn-primary">see how we did it</a>
      </div>
    </div>

  </div>
</section>

<section class="integrations background-image">

  <div class="col-left">
    <div class="col-left__wrap">

      <h2 class="section-title">Integrated with the systems you already work with</h2>
      <a href="#" class="btn btn-secondary-dark">View all Integrations & Partners</a>

      <div class="row">
        <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/oracle.png" alt="integration logo"></div>
        <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/agilysys.png" alt="integration logo"></div>
        <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/autoclerk.png" alt="integration logo"></div>
        <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/innquest.png" alt="integration logo"></div>
        <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/lodgical-solutions.png" alt="integration logo"></div>
        <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/rategain.png" alt="integration logo"></div>
        <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/resortshare.png" alt="integration logo"></div>
        <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/siteminder.png" alt="integration logo"></div>
        <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/webrezpro.png" alt="integration logo"></div>
      </div>

    </div>
  </div>

</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
