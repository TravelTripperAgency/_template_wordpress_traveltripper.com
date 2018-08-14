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
      <h1 class="page-header__title">Solutions</h1>
    </div>

    <div class="page-header__feature">
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-landing-header.png, <?php echo get_template_directory_uri(); ?>/images/solutions-landing-header@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-landing-header@2x.png" alt="Header Image">
    </div>

  </div>
</section>

<main id="skip-link-content" class="content">

  <section class="intro wrap">

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-reztrip-hover.svg" alt="">
      <p class="title">RezTrip</p>
      <p class="subtitle">CRS & Booking Engine</p>
      <p class="description">Shift bookings from high-commission OTA channels to direct bookings using smart rate and revenue management tools.<span></span></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ttweb-hover.svg" alt="">
      <p class="title">Travel Tripper Web</p>
      <p class="subtitle">Website Platform and Agency</p>
      <p class="description">Change lookers into bookers with beautiful design and smart content like live rates and special offers.<span></span></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-digital-marketing-hover.svg" alt="">
      <p class="title">Digital Marketing</p>
      <p class="description">Maximize your ROI across all online advertising channels with cutting edge technology and strategy.<span></span></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-express-suite-hover.svg" alt="">
      <p class="title">Express Suite</p>
      <p class="description">Power your hotel with the smart all-in-one website and booking engine designed for small and medium-sized properties.<span></span></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-rate-match-hover.svg" alt="">
      <p class="title">Rate Match</p>
      <p class="description">Give your guests the confidence to book direct with an innovative price-checking and rate-matching tool that integrates directly into your website.<span></span></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-integrations-hover.svg" alt="">
      <p class="title">Integrations</p>
      <p class="description">With more than 50+ PMS and hotel technology partners, Travel Tripper integrates well with your existing tech stack.<span></span></p>
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

</main>

<section class="pre-footer-links">
  <a class="pre-footer-link" href="<?php echo get_site_url(); ?>/resources/">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-resources.svg" alt="Resources icon">
      <p class="pre-footer-link__headline">Resources</p>
      <p class="pre-footer-link__description">Insights, knowledge, and information to help you dominate the online travel space.<span></span></p>
    </div>
  </a>
  <a class="pre-footer-link" href="<?php echo get_site_url(); ?>/blog/">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-blog.svg" alt="Blog icon">
      <p class="pre-footer-link__headline">Blog</p>
      <p class="pre-footer-link__description">The latest in hotel marketing and distribution trends for independent hotels.<span></span></p>
    </div>
  </a>
  <a class="pre-footer-link" href="#">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-careers.svg" alt="Careers icon">
      <p class="pre-footer-link__headline">Careers</p>
      <p class="pre-footer-link__description">We're always on the lookout for talented and ambitious individuals looking to join our growing team.<span></span></p>
    </div>
  </a>
</section> <?php

get_footer();
