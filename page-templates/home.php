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
    <div class="page-header__title-area">
      <h1 class="page-header__title"><?php the_title(); ?></h1>
      <p class="page-header__description"><?php the_field( 'header_description' ); ?></p>
      <div class="btn-holder">
        <a class="btn btn-primary" href="#">learn more</a>
      </div>
    </div>
    <div class="page-header__feature">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home-header.png" alt="">
      <ul class="page-header__features">
        <li>Generate Demand</li>
        <li>Optimize Conversions</li>
        <li>Maximize Revenue</li>
      </ul>
    </div>
  </div>
</section>

<section id="skip-link-content" class="intro">
  <div class="row">

    <div class="col-right">
      <div class="col-right__wrap">
        <div class="col-right__col-left">
          <h2 class="section-title">Dominate from search to stay.</h2>
          <p>Travel Tripper's powerful <a href="#">hotel booking engine</a>, <a href="#">website services</a>, and <a href="#">digital marketing solutions</a> help you to maximize revenue from your direct channel.</p>
        </div>
        <div class="col-right__col-right">
          <div class="testimonial">
            <p class="quote">"This software is the best software out there when you want to fight OTA battle."</p>
            <p class="cite">- Hotel Tech Report</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-left">

      <figure>
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/home-showcase.png, <?php echo get_template_directory_uri(); ?>/images/home-showcase@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/home-showcase@2x.png" alt="Travel Tripper Website Example">
      </figure>

      <div class="showcase">
        <div class="showcase__left">
          <p class="showcase__increase"><span>+</span>84%</p>
          <p class="showcase__revenue">direct website revenue</p>
          <a href="#" class="btn btn-primary">see how we did it</a>
        </div>
        <div class="showcase__right">
          <p>The Mayfair Hotel & Spa increased their direct website revenue 84% after parterning with Travel Tripper.</p>
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
      <p class="service__title">RezTrip</p>
      <p class="service__subtitle">CRS & Booking Engine</p>
      <p class="service__description">Shift bookings from high-commission OTA channels to direct bookings using smart rate and revenue management tools.<span></span></p>
    </div>
    <div class="service web">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ttweb-home.svg" alt="">
      <p class="service__title">Travel Tripper Web</p>
      <p class="service__subtitle">Website Platform and Agency</p>
      <p class="service__description">Change lookers into bookers with beautiful design and smart content like live rates and special offers.<span></span></p>
    </div>
    <div class="service dgs">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-digital-marketing-home.svg" alt="">
      <p class="service__title">Digital Marketing</p>
      <p class="service__description">Maximize ROI across all online advertising channels with cutting edge technology and strategy, including our award-winning Real Time Ads for hotels.<span></span></p>
    </div>
  </div>

</section>

<section class="clients">

  <div class="section-title">
    <p class="clients__title">Trusted globally by industry-leading hotels</p>
  </div>

  <div class="owl-carousel client-slider">
    <div class="item background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/client-1.jpg');"></div>
    <div class="item background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/client-2.jpg');"></div>
    <div class="item background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/client-3.jpg');"></div>
    <div class="item background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/client-4.jpg');"></div>
    <div class="item background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/client-1.jpg');"></div>
    <div class="item background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/client-2.jpg');"></div>
    <div class="item background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/client-3.jpg');"></div>
    <div class="item background-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/client-4.jpg');"></div>
  </div>

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
      <p class="customer__title">Hotel Groups and Management Companies</p>
      <p class="customer__description">Flexible multi-property solution with powerful analytics to help you increase ROI in all your online distribution channels.<span></span></p>
    </div>

    <div class="customer casinos">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-casinos-home.svg" alt="Casinos Icon">
      <p class="customer__title">Casinos and Gaming</p>
      <p class="customer__description">Specialized booking features to better serve your most loyal players and core clientele.<span></span></p>
    </div>

    <div class="customer independents">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-independent-hotels-home.svg" alt="Independent Hotels Icon">
      <p class="customer__title">Independent and Boutique Hotels</p>
      <p class="customer__description">The direct booking partner that your team has been looking for.<span></span></p>
    </div>

    <div class="customer partners">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-partners-home.svg" alt="Partners Icon">
      <p class="customer__title">Partners</p>
      <p class="customer__description">Become a partner to help hotels build the perfect digital solution for their booking and marketing needs.<span></span></p>
    </div>

  </div>

</section>

<section class="featured-webinar">

  <div class="col-right background-image"></div>

  <div class="col-left">
    <div class="col-left__inner">
      <p class="type">webinar</p>
      <p class="title">Tapping into the power of authentic travel experiences for hotel marketing</p>
      <p class="time">THURSDAY MAY 3, 2018 @ 11:00AM EDT</p>
      <p>In this webinar, learn about how travel experience influences the customer booking journey, and discover useful tips on how to better integrate the right visuals, locality, and storytelling into your online hotel marketing efforts to win over guests. </p>
      <a href="#" class="btn btn-primary">reserve your spot</a>
    </div>
  </div>

</section>

<section class="events">
  <div class="wrap">

    <div class="events__title"><h3>Upcoming Events</h3></div>

    <div class="row">

      <div class="event">
        <p class="event__date">MARCH 12-14</p>
        <p class="event__title">HT-NEXT – SAN DIEGO</p>
        <p class="event__location">Manchester Grand Hyatt, 1 Market Pl, San Diego, CA 92101</p>
        <p class="event__time">8 AM (Sunday, March 12, 2018) - 7 PM (Wednesday, March 14, 2018)</p>
      </div>

      <div class="event">
        <p class="event__date">APRIL 11-13</p>
        <p class="event__title">HITEC - AMSTERDAM</p>
        <p class="event__location">RAI Amsterdam Convention Centre, Europaplein 2-22, 1078 GZ Amsterdam, Netherlands BOOTH # J-234</p>
      </div>

      <div class="event">
        <p class="event__date">MAY 15-17</p>
        <p class="event__title">International Hotel Technology Forum (IHTF) - SPAIN</p>
        <p class="event__location">TBD - Coming Soon</p>
      </div>

      <div class="event">
        <p class="event__date">JUNE 18-21</p>
        <p class="event__title">HITEC - HOUSTON</p>
        <p class="event__location">George R. Brown Convention Center, 1001 Avenida De Las Americas, Houston, TX 77010</p>
      </div>

    </div>

  </div>
</section>

<section class="featured-resources">
  <div class="wrap">

    <div class="featured-resources__title"><h3>Featured Resources</h3></div>

    <div class="featured-resources__wrap">

      <div class="resource">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt="437x255"></a>
        <p><a href="#">6 hotel booking trends we're watching in 2018</a></p>
      </div>

      <div class="resource">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt="437x255"></a>
        <p><a href="#">How to encourage guests to write hotel reviews on TripAdvisor, Yelp, Google and Facebook</a></p>
      </div>

      <div class="resource">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt="437x255"></a>
        <p><a href="#">5 ways hotels can use behavioral economics to improve conversion rates</a></p>
      </div>

      <div class="resource">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt="437x255"></a>
        <p><a href="#">The importance of data transparency in hotel marketing</a></p>
      </div>

    </div>

    <div class="btn-wrap">
      <a class="btn btn-primary-white" href="#">view all</a>
    </div>

  </div>

</section> <?php

get_footer();
