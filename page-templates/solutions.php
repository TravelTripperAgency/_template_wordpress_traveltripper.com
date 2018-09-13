<?php
/**
 * The template for displaying the Solutions page.
 *
 * Template Name: Solutions
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/solutions-landing-header.png"> <?php
            } ?>
        </div>
    </div>
</section>

<main id="skip-link-content" class="content">

  <section class="intro wrap">

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-reztrip-hover.svg" alt="">
      <p class="title"><a href="<?php echo get_site_url(); ?>/solutions/booking-engine/">RezTrip</a></p>
      <p class="subtitle">CRS & Booking Engine</p>
      <p class="description">Shift bookings from high-commission OTA channels to direct bookings using smart rate and revenue management tools.</p>
      <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ttweb-hover.svg" alt="">
      <p class="title"><a href="<?php echo get_site_url(); ?>/solutions/hotel-websites/">Travel Tripper Web</a></p>
      <p class="subtitle">Website Platform and Agency</p>
      <p class="description">Change lookers into bookers with beautiful design and dynamic content like live rates and special offers.</p>
      <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-digital-marketing-hover.svg" alt="">
      <p class="title"><a href="<?php echo get_site_url(); ?>/solutions/digital-marketing/">Digital Marketing</a></p>
      <p class="subtitle">Full-Service Agency</p>
      <p class="description">Maximize your ROI across all online advertising channels with cutting edge technology and strategy.</p>
      <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

    <!-- <div class="col">
      <img src="<?php // echo get_template_directory_uri(); ?>/images/icons/icon-express-suite-hover.svg" alt="">
      <p class="title">Express Suite</p>
      <p class="description">Power your hotel with the smart all-in-one website and booking engine designed for small and medium-sized properties.</p>
      <p class="arrow"><img src="<?php // echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div> -->

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-rate-match-hover.svg" alt="">
      <p class="title"><a href="<?php echo get_site_url(); ?>/solutions/rate-match/">Rate Match</a></p>
      <p class="description">Give your guests the confidence to book direct with an innovative price-checking and rate-matching tool that integrates directly into your website.</p>
      <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-integrations-hover.svg" alt="">
      <p class="title"><a href="<?php echo get_site_url(); ?>/solutions/integrations/">Integrations</a></p>
      <p class="description">With more than 50+ PMS and hotel technology partners, Travel Tripper integrates well with your existing tech stack.</p>
      <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>

  </section>

  <section class="choose">
    <div class="wrap">

      <h2 class="section-title">Why choose Travel Tripper?</h2>

      <div class="row">

        <div class="col-left">
          <div class="why">
            <p class="title">Dedicated Service</p>
            <p>Travel Tripper's integrated client services ensures that you'll get hands-on support on all your questions from a dedicated account team.</p>
          </div>
          <div class="why">
            <p class="title">Unparalleled Expertise</p>
            <p>We're built for hoteliers by hoteliers—our team will provide the expertise and insights needed to make sure your hotel succeeds.</p>
          </div>
          <div class="why">
            <p class="title">Constant Innovation</p>
            <p>At Travel Tripper, our success depends directly on yours. We never stop striving to make our solutions better, faster, and more powerful.</p>
          </div>
        </div>

        <div class="col-right">
          <img src="<?php echo get_template_directory_uri(); ?>/images/hotel-tech-report.png" alt="hotel tech report">
        </div>

      </div>

      <div class="testimonial">
        <p class="quote">We have enjoyed using Travel Tripper's Reztrip booking engine and central reservations system for the past 3 years. It is simple to use yet packs a powerful punch when it comes to technology and innovation... Compared to several other CR systems that I've worked with, Reztrip admin is by far the friendliest and easiest to manage. We continuously look forward to what Travel Tripper will think of next.</p>
        <p class="cite">STACEY YAMASHITA, Revenue Distribution Manager, Pacific Beach Hotel</p>
      </div>

    </div>
  </section>

</main> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
