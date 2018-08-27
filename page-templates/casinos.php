<?php
/**
 * The template for displaying the Casinos page.
 *
 * Template Name: Casinos
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
                <a class="btn btn-primary" href="#">request a demo</a>
            </div>
        </div>
        <div class="page-header__feature"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/casinos-header.png"> <?php
            } ?>
            <ul class="page-header__features">
                <li>Allow guests to use their player number to book loyalty offers online</li>
                <li>Integration with leading casino hotel software systems</li>
            </ul>
        </div>
    </div>
</section>

<section class="intro wrap">

  <div class="top row">
    <div class="col-left">
      <h2 class="section-title">Customized features to impress new loyalty members, and keep high value guests engaged.</h2>
    </div>
    <div class="col-right">
      <p>Casino hotels depend on player loyalty for their core business; Travel Tripper has built a booking product that helps gaming properties serve their most loyal guests just as easily online as offline. </p>
    </div>
  </div>

  <div class="bottom row">
    <div class="col">
      <div class="title-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-reztrip-gray.svg" alt="">
        <h3 class="column-title">Serve your most loyal guests</h3>
      </div>
      <ul>
        <li>Integration with key loyalty programs such as Scientific Games and Aristocrat</li>
        <li>Offer complimentary rooms online and allow guests to book special loyalty offers with their player numbers</li>
        <li>Reduce reliance on call center</li>
        <li>Multi-room and multi-rate plan bookings available</li>
        <li>Capability of blending multiple casino offers into one reservation</li>
        <li>Brand and hotel group booking portals available</li>
        <li>Make direct bookings easy and simple for your top guests and players</li>
      </ul>
    </div>
    <div class="col">
      <div class="title-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-reztrip-gray.svg" alt="">
        <h3 class="column-title">Maximize revenue through your direct channel</h3>
      </div>
      <ul>
        <li>Dynamic pricing rules and geographic pricing</li>
        <li>Room upsells</li>
        <li>Easily sell room packages and individual add-ons</li>
        <li>Integrated rate-shopping and price-matching with Travel Tripper Rate Match</li>
        <li>Enhanced group integration</li>
        <li>Integration with key revenue optimization platforms such as Rainmaker and Nor1</li>
      </ul>
    </div>
  </div>

</section>

<section class="clients background-image">

  <div class="wrap">
    <h2 class="section-title">Trusted by top casino and gaming companies</h2>
  </div>

  <div class="client-slider owl-carousel">
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

<section class="casino-integrations row wrap">
  <div class="col-right">
    <h2 class="section-title">Integrations available with standard gaming and casino hotel platforms</h2>
    <p>Don't see an integration listed here that you need? View our full list of <a href="#">integration partners</a> or contact us for more information.</p>
  </div>
  <div class="col-left row">
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/agilysys.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/aristocrat.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/nor1.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/passkey.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/rainmaker.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/scientific-games.png" alt=""></div>
  </div>
</section>

<section class="testimonial-showcase row">

  <div class="col-left wrap">
    <div class="testimonial">
      <p class="quote">Within a few days of launching with RezTrip Direct, <strong>our conversion rates nearly tripled</strong>, which was the most important metric we were looking to improve. We look forward to continuing our productive relationship with Travel Tripper.</p>
      <p class="cite">– BRIAN CHRISTENSEN, Corporate VP, Revenue Management & Distribution, Golden Entertainment</p>
    </div>
  </div>

  <div class="col-right">

    <figure>
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/casinos-showcase.png, <?php echo get_template_directory_uri(); ?>/images/casinos-showcase@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/casinos-showcase@2x.png" alt="Travel Tripper Website Example">
    </figure>

    <div class="showcase">
      <div class="showcase__left">
        <p>El Dorado Resorts has consistently seen increases in conversion rates across its property websites since going live with RezTrip in 2016.</p>
      </div>
      <div class="showcase__right">
        <p class="showcase__increase"><span>+</span>54%</p>
        <p class="showcase__revenue">increase in conversion rates</p>
        <a href="#" class="btn btn-primary">see how we did it</a>
      </div>
    </div>

  </div>

</section>

<section class="team background-image">
  <div class="wrap row">

    <div class="col-right">
      <h2 class="section-title">Dedicated and personal account support from our revenue experts specializing in the casino & gaming industry</h2>
      <p>Travel Tripper's CRS is supported by a dedicated team of revenue optimization and product experts that will guide your hotel to success. Our integrated customer support teams are readily available by phone or email so you can quickly get the answers and help you need.</p>
    </div>

    <div class="col-left">
      <figure class="wp-caption">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/vegas-team.jpg, <?php echo get_template_directory_uri(); ?>/images/vegas-team@2x.jpg 2x" src="<?php echo get_template_directory_uri(); ?>/images/vegas-team@2x.jpg" alt="Travel Tripper's Las Vegas Team">
        <figcaption class="wp-caption-text">Travel Tripper's dedicated Las Vegas team enjoys a night out with clients.</figcaption>
      </figure>
    </div>

  </div>
</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' ); ?>

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

</section> <?php

get_template_part( 'inc/template', 'events' ); ?>

<section class="featured-resources">
  <div class="wrap">

    <div class="featured-resources__title"><h3>Casinos & Gaming Resources</h3></div>

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
