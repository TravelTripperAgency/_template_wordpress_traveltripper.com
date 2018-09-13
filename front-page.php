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
                <a class="btn btn-primary" href="<?php echo get_site_url(); ?>/solutions/">learn more</a>
            </div>
        </div>

        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php

            if ( wp_is_mobile() ) { ?>

                <img src="<?php echo get_template_directory_uri(); ?>/images/home-header.png" alt="Travel Tripper Demo Image"> <?php

            } else { ?>

                <img class="d-md-none" src="<?php echo get_template_directory_uri(); ?>/images/home-header.png" alt="Travel Tripper Demo Image">

                <div class="video-container">
                    <div class="laptop">
                        <video class="d-sm-block" muted autoplay>
                            <source src="<?php echo get_template_directory_uri(); ?>/video/laptop.webm" type="video/webm">
                            <source src="<?php echo get_template_directory_uri(); ?>/video/laptop.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="phone-container">
                        <div class="phone">
                            <video class="d-sm-block" muted autoplay>
                                <source src="<?php echo get_template_directory_uri(); ?>/video/phone.webm" type="video/webm">
                                <source src="<?php echo get_template_directory_uri(); ?>/video/phone.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div> <?php
            } ?>

            <ul class="page-header__features">
                <li>Generate Demand</li>
                <li>Optimize Conversions</li>
                <li>Maximize Revenue</li>
            </ul>

        </div>

    </div>
</section>

<section class="intro">
  <div class="row">

    <div class="col-right">
      <div class="col-right__wrap">
        <div class="col-right__col-left<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInUp'; } ?>">
          <h2 class="section-title">Dominate from search to stay.</h2>
          <p>Travel Tripper's powerful <a href="<?php echo get_site_url(); ?>/solutions/booking-engine/">hotel booking engine</a>, <a href="<?php echo get_site_url(); ?>/solutions/hotel-websites/">website services</a>, and <a href="<?php echo get_site_url(); ?>/solutions/digital-marketing/">digital marketing solutions</a> help you to maximize revenue from your direct channel.</p>
        </div>
        <div class="col-right__col-right<?php if ( !wp_is_mobile() ) { echo ' animated wow fadeIn'; } ?>" data-wow-delay=".5s">
          <div class="testimonial">
            <p class="quote">"This software is the best software out there when you want to fight the OTA battle."</p>
            <p class="cite">- VP Revenue Management, Miami Hotel</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-left">

      <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInLeft"'; } ?>>
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/home-showcase.png, <?php echo get_template_directory_uri(); ?>/images/home-showcase@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/home-showcase@2x.png" alt="Travel Tripper Website Example">
      </figure>

      <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>" data-wow-delay=".5s">
        <div class="showcase__left">
          <p class="showcase__increase"><span>+</span>84%</p>
          <p class="showcase__revenue">direct website revenue</p>
          <a href="#" class="btn btn-primary">see how we did it</a>
        </div>
        <div class="showcase__right">
          <p>The Mayfair Hotel & Spa increased their direct website revenue 84% after partnering with Travel Tripper.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="services background-image">

  <div class="section-title">
    <h2 class="services__title">Three dynamic solutions to power your hotel bookings</h2>
  </div>

  <div class="row wrap">
    <div class="service reztrip">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-reztrip-home.svg" alt="">
      <p class="service__title"><a href="<?php echo get_site_url(); ?>/solutions/booking-engine/">RezTrip</a></p>
      <p class="service__subtitle">CRS & Booking Engine</p>
      <p class="service__description">Shift bookings from high-commission OTA channels to direct bookings using smart rate and revenue management tools.</p>
      <p class="service__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow-white.svg"></p>
    </div>
    <div class="service web">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ttweb-home.svg" alt="">
      <p class="service__title"><a href="<?php echo get_site_url(); ?>/solutions/hotel-websites/">Travel Tripper Web</a></p>
      <p class="service__subtitle">Website Platform and Agency</p>
      <p class="service__description">Change lookers into bookers with beautiful design and smart content like live rates and special offers.</p>
      <p class="service__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow-white.svg"></p>
    </div>
    <div class="service dgs">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-digital-marketing-home.svg" alt="">
      <p class="service__title"><a href="<?php echo get_site_url(); ?>/solutions/digital-marketing/">Digital Marketing</a></p>
      <p class="service__subtitle">Full-Service Agency</p>
      <p class="service__description">Maximize ROI across all online advertising channels with cutting edge technology and strategy, including our award-winning Real Time Ads for hotels.</p>
      <p class="service__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow-white.svg"></p>
    </div>
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

<section class="spacer background-image"></section>

<section class="customers">

  <div class="section-title">
    <p class="customers__title">Direct revenue, simplifed for all</p>
    <p class="customers__subtitle">Travel Tripper's packaged and custom solutions are ideal for:</p>
  </div>

  <div class="row wrap">

    <div class="customer groups">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-hotel-groups-home.svg" alt="Hotel Groups Icon">
      <p class="customer__title"><a href="<?php echo get_site_url(); ?>/who-we-serve/management-companies/">Hotel Groups and Management Companies</a></p>
      <p class="customer__description">Flexible multi-property solution with powerful analytics to help you increase ROI in all your online distribution channels.</p>
      <p class="customer__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

    <div class="customer casinos">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-casinos-home.svg" alt="Casinos Icon">
      <p class="customer__title"><a href="<?php echo get_site_url(); ?>/who-we-serve/casinos/">Casinos and Gaming</a></p>
      <p class="customer__description">Specialized booking features to better serve your most loyal players and core clientele.</p>
      <p class="customer__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

    <div class="customer independents">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-independent-hotels-home.svg" alt="Independent Hotels Icon">
      <p class="customer__title"><a href="<?php echo get_site_url(); ?>/who-we-serve/independents/">Independent and Boutique Hotels</a></p>
      <p class="customer__description">The direct booking partner that your team has been looking for.</p>
      <p class="customer__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

    <div class="customer partners">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-partners-home.svg" alt="Partners Icon">
      <p class="customer__title"><a href="<?php echo get_site_url(); ?>/who-we-serve/partners/">Partners</a></p>
      <p class="customer__description">Become a partner to help hotels build the perfect digital solution for their booking and marketing needs.</p>
      <p class="customer__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

  </div>

</section> <?php

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
