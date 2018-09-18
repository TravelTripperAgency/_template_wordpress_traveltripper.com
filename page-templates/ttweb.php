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
                <a class="btn btn-primary" href="https://try.traveltripper.com/request-demo/?utm_source=website&utm_content=ttweb">request a demo</a>
            </div>
        </div>
        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-ttweb-header.png"> <?php
            } ?>
            <ul class="page-header__features">
                <li>Award-winning web design</li>
                <li>Industry leading e-commerce platform</li>
                <li>Seamlessly integrated CRS & booking engine</li>
            </ul>
        </div>
    </div>
</section>

<section class="intro">
  <div class="wrap row">

    <div class="col-right">

      <h2 class="section-title">Powerful features that drive higher conversion rates</h2>

      <div class="row col-right__top">
        <p>Change lookers into bookers and increase bookings with beautiful design combined with smart dynamic content such as live rates and special offers. Our web platform is the first to fully integrate the <a href="<?php echo get_site_url(); ?>/solutions/booking-engine/">CRS and booking engine</a> directly into the hotel  website, creating a modern and seamless user experience that increases direct bookings.</p>
      </div>

      <div class="row col-right__middle">
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-clock.svg" alt="clock icon">Live rates</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ribbon.svg" alt="ribbon icon">Scarcity messaging & social proof</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-rate-calendar.svg" alt="calendar icon">OTA comparison rates</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-booking-panel.svg" alt="ecommerce icon">E-Commerce booking panel</p>
      </div>

      <div class="row col-right__bottom">
        <ul>
          <li>Live rate match and real-time meta comparison</li>
          <li>Dynamic offers based on location, behavior, or referral source</li>
          <li>Room details and images live from CRS</li>
          <li>Specials or offers live from CRS</li>
        </ul>
      </div>

      <div class="btn-holder">
        <a href="#" id="download-button" class="btn btn-primary-white"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-pdf.svg" alt="pdf icon">Download the TT Web feature sheet</a>
      </div>

    </div>

    <div class="col-left">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/images/solutions-ttweb-intro.png" alt="TTWeb Example">
      </figure>
    </div>

  </div>
</section>

<section class="spacer background-image"></section>

<section class="full-service">
  <div class="wrap row">

    <div class="col-left">
      <h2 class="section-title">Work with our full-service agency</h2>
      <p>Travel Tripper's in-house agency offers full website design and development services, along with ongoing maintenance and digital marketing specialized for hotels. Our team works hand-in-hand with your distribution and revenue management teams to help your hotel maximize performance on your direct channel.</p>
    </div>

    <div class="col-right row">
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-inbound.svg" alt="">Inbound Marketing (Blogging, Custom Content)</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-custom-web.svg" alt="">Custom web design and development</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-email-marketing.svg" alt="">Email Marketing</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-photography.svg" alt="">Photography</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ppc.svg" alt="">PPC Marketing</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-copywriting.svg" alt="">Copywriting</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-search.svg" alt="">Search Engine Optimization (SEO)</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-maintenance.svg" alt="">Ongoing website maintenance</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-mktng-campaign.svg" alt="">Campaign Creation / Execution</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-translation.svg" alt="">Translations</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-acct-mgmt.svg" alt="">Account Management / Strategic Consulting</p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ada-compliance.svg" alt="">ADA Compliance</p>
    </div>

  </div>
</section>

<section class="clients"> <?php

    if ( have_rows( 'slider_images' ) ) { ?>

        <div class="owl-carousel client-slider"> <?php

            while ( have_rows( 'slider_images' ) ) : the_row(); ?>

                <div class="item background-image" style="background-image: url('<?php the_sub_field( 'slider_image' ); ?>');"></div> <?php

            endwhile; ?>

        </div> <?php

    } ?>

</section>

<section class="awards">
  <div class="wrap">

    <div class="row">

      <div class="col-left">
        <figure class="wp-caption">
          <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-adrian-awards-2016.jpg, <?php echo get_template_directory_uri(); ?>/images/solutions-adrian-awards-2016@2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-adrian-awards-2016@2x.jpg" alt="Adrian Awards photo">
          <figcaption class="wp-caption-text">Nate Lane, Senior Director of Digital Platforms, and Andre De Araujo, VP of E-commerce at Highgate Hotels, accept the Platinum Adrian Award for Digital Marketing for Travel Tripper's work on 24 North Hotel website.</figcaption>
        </figure>
      </div>

      <div class="col-right">
        <h2 class="section-title">Build a high-performing website with our award-winning agency</h2>
        <p>Our team of designers, web developers, and digital marketers are thought leaders and experts specializing in hotel marketing and e-commerce. We've developed many of the new best practices that have been recognized by leading hospitality associations and publications.</p>
      </div>

    </div>

    <div class="row award-images">
      <div class="award">
        <img src="<?php echo get_template_directory_uri(); ?>/images/awards/award-horizon.png" alt="Horizon Awards">
      </div>
      <div class="award">
        <img src="<?php echo get_template_directory_uri(); ?>/images/awards/award-adrian.png" alt="Adrian Awards">
      </div>
      <div class="award">
        <img src="<?php echo get_template_directory_uri(); ?>/images/awards/award-davey.png" alt="Davey Awards">
      </div>
      <div class="award">
        <img src="<?php echo get_template_directory_uri(); ?>/images/awards/award-webby.png" alt="Webby Awards">
      </div>
      <div class="award">
        <img src="<?php echo get_template_directory_uri(); ?>/images/awards/awards-adrian-hsmai.png" alt="HSMAI Adrian Awards">
      </div>
    </div>

  </div>
</section>

<section class="conversion row">

  <div class="col-left">

    <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInLeft"'; } ?>>
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-ttweb-metric-ipad.png, <?php echo get_template_directory_uri(); ?>/images/solutions-ttweb-metric-ipad@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-ttweb-metric-ipad@2x.png" alt="Yve Miami iPad View">
    </figure>

    <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>" data-wow-delay=".5s">
      <div class="showcase__left">
        <p class="showcase__increase">3x</p>
        <p class="showcase__revenue">increase in bookings</p>
        <a href="#" class="btn btn-primary">see how we did it</a>
      </div>
      <div class="showcase__right">
        <p>Hotel Yve Miami tripled their website bookings and direct website contribution after launching with Travel Tripper Web in August 2017.</p>
      </div>
    </div>

  </div>

  <div class="col-right">

    <div class="testimonial<?php if ( !wp_is_mobile() ) { echo ' animated wow fadeIn'; } ?>" data-wow-delay=".5s">
      <p class="quote">Key contributor to my hotel's 20% website contribution growth in 2017. Very innovative. Easy to navigate. Love how fast they react on industry trends and being able to implement.</p>
      <p class="cite">Director of Revenue, Independent Hotel</p>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/images/hotel-tech-report.png" alt="Hotel Tech Report Reviews">

  </div>

</section>

<section class="spacer-2 background-image"></section>

<section class="services">
  <div class="wrap row">

    <div class="title-row">
      <h2 class="section-title">Power up direct bookings by integrating Travel Tripper Web with RezTrip and Digital Marketing</h2>
      <p class="section-subtitle">Travel Tripper's suite of solutions together create a robust hotel e-commerce platform designed to maximize your hotel's direct distribution strategy.</p>
    </div>

    <figure>
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-pre-footer-promo.png, <?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-pre-footer-promo@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-pre-footer-promo@2x.png" alt="Services Example">
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
