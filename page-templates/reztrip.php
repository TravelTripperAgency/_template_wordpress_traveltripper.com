<?php
/**
 * The template for displaying Reztrip page.
 *
 * Template Name: Reztrip
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
    <div class="wrap row">

        <div class="page-header__title-area<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>">
            <h1 class="page-header__title"><?php the_title(); ?></h1>
            <p class="page-header__subtitle"><?php the_field( 'header_subtitle' ); ?></p>
            <p class="page-header__description"><?php the_field( 'header_description' ); ?></p>
            <div class="btn-holder">
                <a class="btn btn-primary" href="#">request a demo</a>
            </div>
        </div>

        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-header.png"> <?php
            } ?>
            <ul class="page-header__features">
                <li>Powerful Booking Engine</li>
                <li>Comprehensive Central Reservation System</li>
                <li>Full-service Distribution Solution</li>
            </ul>
        </div>

    </div>
</section>

<section class="intro">
  <div class="wrap row">

    <div class="col-right">

      <h2 class="section-title">Dominate from search to stay.</h2>

      <div class="row col-right__top">
        <p>We've created the industry's most innovative CRS and booking engine—intuitive, elegant, and packed with features to help you convert lookers into bookers. Hotels that switch to RezTrip routinely see significant increases in direct bookings and conversion rates.</p>
      </div>

      <div class="row col-right__middle">
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-sale.svg" alt="pricing icon">Strikethrough pricing</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-hourglass.svg" alt="hourglass icon">Rooms remaining</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-geo-targeting.svg" alt="geo location icon">Dynamic Pricing Rules with geo-targeting </p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-price-match.svg" alt="rate match icon">Integrated rate match</p>
      </div>

      <div class="row col-right__bottom">
        <ul>
          <li>Merchandising opportunities</li>
          <li>Automated email retargeting</li>
          <li>Multi-room and multi-rate plan booking</li>
          <li>Multi-currency and multilingual options</li>
          <li>Custom room categories filter</li>
        </ul>
      </div>

      <div class="btn-holder">
        <a href="#" class="btn btn-primary-white"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-pdf.svg" alt="pdf icon">Download the full RezTrip feature and spec sheet.</a>
      </div>

    </div>

    <div class="col-left">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-intro.png" alt="Reztrip Example">
      </figure>
    </div>

  </div>
</section>

<section class="spacer background-image"></section>

<section class="distribution">
  <div class="wrap row">

    <div class="col-left">
      <div class="text-wrap">
        <h2 class="section-title">Comprehensive hotel distribution</h2>
        <p>In addition to your hotel website, RezTrip also offers distribution through channel managers, OTAs, GDS, consortia, metasearch, and call center. <span class="blue">Manage all rates and inventory through one seamless  reservation system.</span></p>
      </div>
      <div class="text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hotel-tech-report-crs.png" alt="HotelTechAwards">
      </div>
    </div>

    <div class="col-right">
      <figure>
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-comprehensive-distribution.png, <?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-comprehensive-distribution@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-comprehensive-distribution@2x.png" alt="Reztrip distribution graphic">
      </figure>
    </div>

  </div>
</section>

<section class="spacer-2 background-image"></section>

<section class="why">

  <h2 class="section-title">Why choose Travel Tripper</h2>

  <div class="wrap row">

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-roi-blue.svg" alt="ROI icon">
      <p class="title">Better ROI</p>
      <p class="description">Shift bookings from high-commission channels to direct bookings through RezTrip tools</p>
      <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-lightbulb-blue.svg" alt="lightbulb icon">
      <p class="title">Better decisions</p>
      <p class="description">Whether you operate one hotel or oversee many, easily make the smartest revenue strategy decisions for your hotel</p>
      <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-resources-blue.svg" alt="briefcase icon">
      <p class="title">Expert support</p>
      <p class="description">Tap into a trove of expert resources to power your success</p>
      <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

  </div>

</section>

<section class="conversion row">

  <div class="col-right wrap<?php if ( !wp_is_mobile() ) { echo ' animated wow fadeIn'; } ?>" data-wow-delay=".5s">
    <div class="testimonial">
      <p class="quote">RezTrip is by far the best online booking engine available for hotels right now. Our direct bookings instantly increased once we launched RezTrip across our portfolio of 18 hotels.</p>
      <p class="cite">MATTHEW THOMAS – Director, Meriton Group</p>
    </div>
  </div>

  <div class="col-left">

    <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInLeft"'; } ?>>
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-conversion-ipad.png, <?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-conversion-ipad@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-conversion-ipad@2x.png" alt="Conversion Rate iPad">
    </figure>

    <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>" data-wow-delay=".5s">
      <div class="showcase__left">
        <p class="showcase__increase">2X<span>+</span></p>
        <p class="showcase__revenue">conversion rate in four months</p>
        <a href="#" class="btn btn-primary">see how we did it</a>
      </div>
      <div class="showcase__right">
        <p>The Stratosphere Hotel increased their conversion rate over 2x within 4 months after integrating RezTrip with their exisiting system.</p>
      </div>
    </div>

  </div>

</section>

<section class="integrations background-image">
  <div class="row wrap">

    <div class="col-left">
      <h2 class="section-title">Seamless reservation delivery and integrations with your PMS, channel manager, and revenue management systems</h2>
      <a href="#" class="btn">view all integrations & partners</a>
    </div>

    <div class="col-right row">
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/siteminder.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/oracle.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/agilysys.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/rategain.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/hotelavailabilities.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/infor.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/resortshare.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/room-master.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/lodgical-solutions.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/webrezpro.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/ideas.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/rainmaker.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/autoclerk.png" alt="integration logo"></div>
      <div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/maestro.png" alt="integration logo"></div>
    </div>

  </div>
</section>

<section class="team">
  <div class="row wrap">

    <div class="col-left">
      <figure>
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/news-details-2.png, <?php echo get_template_directory_uri(); ?>/images/news-details-2@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/news-details-2@2x.png" alt="Travel Tripper Team">
      </figure>
    </div>

    <div class="col-right">
      <div class="col-right__wrap">
        <h2 class="section-title">Dedicated and personal account service from our expert team</h2>
        <p>Travel Tripper's CRS is supported by dedicated team of revenue optimization and marketing experts that will guide your hotel to success. Our integrated client services and customer support teams allow for a single point of contact so you can quickly get the answers and help that you need.</p>
      </div>
    </div>

  </div>
</section>

<section class="spacer-3 background-image"></section>

<section class="services">
  <div class="wrap row">

    <div class="text-center">
      <h2 class="section-title">Power up direct bookings by integrating RezTrip with TT Web and  </h2>
      <p>When you work with our digital marketing team, we are able to create seamless campaigns because we have insights into your booking and website data.</p>
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
</section>

<section class="pre-footer-links">
  <a class="pre-footer-link" href="<?php echo get_site_url(); ?>/solutions/hotel-websites/">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ttweb.svg" alt="Hotel Websites icon">
      <p class="pre-footer-link__headline">Travel Tripper Web</p>
      <p class="pre-footer-link__description">Boost direct bookings with beautiful hotel websites driving higher guest engagement and increased conversions across all devices.</p>
      <p class="pre-footer-link__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>
  </a>
  <a class="pre-footer-link" href="<?php echo get_site_url(); ?>/solutions/digital-marketing/">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-digital-marketing.svg" alt="Digital Marketing icon">
      <p class="pre-footer-link__headline">Digital Marketing</p>
      <p class="pre-footer-link__description">Drive qualified traffic to your hotel website and maximize direct bookings with smart campaigns managed by an expert team.</p>
      <p class="pre-footer-link__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>
  </a>
</section> <?php

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
