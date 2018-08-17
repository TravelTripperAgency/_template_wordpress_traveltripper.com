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
    <div class="page-header__title-area">
      <h1 class="page-header__title"><?php the_title(); ?></h1>
      <p class="page-header__subtitle"><?php the_field( 'header_subtitle' ); ?></p>
      <p class="page-header__description"><?php the_field( 'header_description' ); ?></p>
      <div class="btn-holder">
        <a class="btn btn-primary" href="#">request a demo</a>
      </div>
    </div>
    <div class="page-header__feature">
      <img src="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-header.png" alt="">
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
      <p class="description">Shift bookings from high-commission channels to direct bookings through RezTrip tools<span></span></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-lightbulb-blue.svg" alt="lightbulb icon">
      <p class="title">Better decisions</p>
      <p class="description">Whether you operate one hotel or oversee many, easily make the smartest revenue strategy decisions for your hotel<span></span></p>
    </div>

    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-resources-blue.svg" alt="briefcase icon">
      <p class="title">Expert support</p>
      <p class="description">Tap into a trove of expert resources to power your success<span></span></p>
    </div>

  </div>

</section>

<section class="conversion row">

  <div class="col-right wrap">
    <div class="testimonial">
      <p class="quote">RezTrip is by far the best online booking engine available for hotels right now. Our direct bookings instantly increased once we launched RezTrip across our portfolio of 18 hotels.</p>
      <p class="cite">MATTHEW THOMAS – Director, Meriton Group</p>
    </div>
  </div>

  <div class="col-left">

    <figure>
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-conversion-ipad.png, <?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-conversion-ipad@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-conversion-ipad@2x.png" alt="Conversion Rate iPad">
    </figure>

    <div class="showcase">
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
      <p class="pre-footer-link__description">Boost direct bookings with beautiful hotel websites driving higher guest engagement and increased conversions across all devices.<span></span></p>
    </div>
  </a>
  <a class="pre-footer-link" href="<?php echo get_site_url(); ?>/solutions/digital-marketing/">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-digital-marketing.svg" alt="Digital Marketing icon">
      <p class="pre-footer-link__headline">Digital Marketing</p>
      <p class="pre-footer-link__description">Drive qualified traffic to your hotel website and maximize direct bookings with smart campaigns managed by an expert team.<span></span></p>
    </div>
  </a>
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

<section class="featured-resources">
  <div class="wrap">

    <div class="featured-resources__title"><h3>Hotel Distribution Resources</h3></div>

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
