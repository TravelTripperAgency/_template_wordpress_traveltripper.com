<?php
/**
 * The template for displaying the Independents page.
 *
 * Template Name: Independents
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title">Independent and Boutique Hotels</h1>
      <p class="page-header__description">Power your hotel's e-commerce with a partner invested in your success.</p>
      <div class="btn-holder">
        <a class="btn btn-primary" href="#">request a demo</a>
      </div>
    </div>
    <div class="page-header__feature">
      <img src="<?php echo get_template_directory_uri(); ?>/images/independent-header.png" alt="">
    </div>
  </div>
</section>

<section class="intro row wrap">

  <div class="col-right">
    <div class="col-right__wrap">
      <p>Complete booking and e-commerce solutions</p>
      <p>Dedicated account management</p>
      <p>Build direct relationships with your guests</p>
    </div>
  </div>

  <div class="col-left">
    <h2 class="section-title">Competing digitally just got a lot easier.</h2>
    <p>Independent and boutique hotels face a lot of upward battles when it comes to online distribution—high competition, a rapidly changing marketplace, limited resources and time. With Travel Tripper, you’ll have a strategic e-commerce partner invested in your hotel’s success. </p>
  </div>

</section>

<section class="clients">

  <div class="wrap text-center">
    <h2 class="section-title">Trusted by top independent and boutique hotels</h2>
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

<section class="ecommerce wrap row">

  <div class="col-right">
    <h2 class="section-title">All-in-one complete e-commerce solution</h2>
    <p>We offer <a href="#">distribution</a>, <a href="#">booking engine</a>, <a href="#">website</a>, and <a href="#">digital marketing</a> so you are covered from search to stay with one point of contact when you need to get things done.</p>
    <p>Work closely with an expert team of revenue optimization and marketing specialists to help you maximize revenue and hit your direct booking goals.</p>
  </div>

  <div class="col-left">
    <img srcset="<?php echo get_template_directory_uri(); ?>/images/independent-ecommerce.png, <?php echo get_template_directory_uri(); ?>/images/independent-ecommerce@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/independent-ecommerce@2x.png" alt="">
  </div>

</section>

<section class="spacer background-image"></section>

<section class="solutions">

  <div class="wrap text-center">
    <h2 class="section-title">Three dynamic solutions to power your hotel bookings</h2>
  </div>

  <div class="row wrap">
    <div class="service reztrip">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-reztrip-hover.svg" alt="">
      <p class="service__title">RezTrip</p>
      <p class="service__subtitle">CRS & Booking Engine</p>
      <p class="service__description">Shift bookings from high-commission OTA channels to direct bookings using smart rate and revenue management tools.<span></span></p>
    </div>
    <div class="service web">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ttweb-hover.svg" alt="">
      <p class="service__title">Travel Tripper Web</p>
      <p class="service__subtitle">Website Platform and Agency</p>
      <p class="service__description">Change lookers into bookers with beautiful design and smart content like live rates and special offers.<span></span></p>
    </div>
    <div class="service dgs">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-digital-marketing-hover.svg" alt="">
      <p class="service__title">Digital Marketing</p>
      <p class="service__description">Maximize ROI across all online advertising channels with cutting edge technology and strategy, including our award-winning Real Time Ads for hotels.<span></span></p>
    </div>
  </div>

</section>

<section class="integrations">

  <div class="row">

    <div class="col-left">

      <figure>
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/independent-showcase.png, <?php echo get_template_directory_uri(); ?>/images/independent-showcase@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/independent-showcase@2x.png" alt="Travel Tripper Website Example">
      </figure>

      <div class="showcase">
        <div class="showcase__left">
          <p class="showcase__increase"><span>+</span>51%</p>
          <p class="showcase__revenue">increase in direct bookings</p>
          <a href="#" class="btn btn-primary">see how we did it</a>
        </div>
        <div class="showcase__right">
          <p>Galt House Hotel increased their direct bookings by 51% since launching with RezTrip CRS & Booking Engine in Sept. 2017</p>
        </div>
      </div>

    </div>

    <div class="col-right row wrap">

      <div class="col-right__col-left">
        <h2 class="section-title">Integrated with the systems you work with</h2>
        <a href="#" class="btn">View all Integrations & Partners</a>
      </div>

      <div class="col-right__col-right row">
        <div class="integration-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/agilysys.png" alt=""></div>
        <div class="integration-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/autoclerk.png" alt=""></div>
        <div class="integration-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/hotelavailabilities.png" alt=""></div>
        <div class="integration-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/innquest.png" alt=""></div>
        <div class="integration-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/lodgical-solutions.png" alt=""></div>
        <div class="integration-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/rategain.png" alt=""></div>
        <div class="integration-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/resortshare.png" alt=""></div>
        <div class="integration-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/siteminder.png" alt=""></div>
        <div class="integration-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/white/webrezpro.png" alt=""></div>
      </div>

    </div>

  </div>

  <div class="col-bottom row wrap">

      <div class="testimonial">
        <p class="quote">The support & responsiveness from the team is great. Travel Tripper's focus on improving direct revenues with new features allows us to keep common efforts easily aligned.</p>
        <p class="cite">- Independent Hotel Marketing Manager on Hotel Tech Report</p>
      </div>

      <img src="<?php echo get_template_directory_uri(); ?>/images/hotel-tech-report.png" alt="hotel tech report">

    </div>

</section>

<section class="express-suite row wrap">

  <div class="col-left">
    <h2 class="section-title">Running a guesthouse, B&B, or vacation rental? </h2>
    <p>Learn more about Express Suite, our all-in-one website and booking solution ideal for small- and medium-sized accommodations.</p>
    <a href="#" class="btn btn-secondary-white">learn more</a>
  </div>

  <div class="col-right">
    <img srcset="<?php echo get_template_directory_uri(); ?>/images/independent-express-suite.png, <?php echo get_template_directory_uri(); ?>/images/independent-express-suite@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/independent-express-suite@2x.png" alt="">
  </div>

</section>

<section class="pre-footer-links">
  <a class="pre-footer-link" href="#">
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
  <a class="pre-footer-link" href="<?php echo get_site_url(); ?>/about/careers/">
    <div class="pre-footer-link__wrapper">
      <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-careers.svg" alt="Careers icon">
      <p class="pre-footer-link__headline">Careers</p>
      <p class="pre-footer-link__description">We're always on the lookout for talented and ambitious individuals looking to join our growing team.<span></span></p>
    </div>
  </a>
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

    <div class="featured-resources__title"><h3>Resources for Independent Hotels</h3></div>

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
