<?php
/**
 * The template for displaying the Partners page.
 *
 * Template Name: Partners
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap">
    <div class="page-header__title-area">
      <h1 class="page-header__title"><?php the_title(); ?></h1>
      <p class="page-header__description"><?php the_field( 'header_description' ); ?></p>
      <div class="btn-holder">
        <a class="btn btn-primary" href="#">work with us</a>
      </div>
    </div>
  </div>
</section>

<section class="partners-join">

  <div class="col-left">
    <div class="col-left__inner">
      <h2 class="section-title">Become a Partner</h2>
      <p>Travel Tripper works together with numerous tech vendors, partners, consultants, and agencies to help hotels build the perfect digital solution for their operational and marketing needs.</p>
      <ul>
        <li>Join the Travel Tripper partner network</li>
        <li>Become a reseller</li>
        <li>API integrations and developer assistance</li>
        <li>Strategic planning and RFP assistance</li>
        <li>Product resources and training</li>
        <li>Development of custom and packaged hotel solutions</li>
      </ul>
    </div>
  </div>

  <div class="col-right background-image"></div>

</section>

<section class="partner-integrations">

  <div class="col-right">
    <div class="col-right__inner">
      <h2 class="section-title">Integrations</h2>
      <p>Travel Tripper integrates with many of the leading hotel technology platforms in the industry, including PMS, channel managers, payment gateways, CRMs, revenue management systems, loyalty programs, data and analytics platforms, advertising platforms and more.</p>
      <a class="btn btn-secondary-white" href="#">View all Integrations & Partners</a>
    </div>
  </div>

  <div class="col-left">
    <div class="col-left__inner">
      <div class="integrations__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/integrations/agilysys.png" alt="">
      </div>
      <div class="integrations__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/integrations/amadeus.png" alt="">
      </div>
      <div class="integrations__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/integrations/dhisco.png" alt="">
      </div>
      <div class="integrations__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/integrations/ideas.png" alt="">
      </div>
      <div class="integrations__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/integrations/jcc-payments.png" alt="">
      </div>
      <div class="integrations__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/integrations/kognitiv.png" alt="">
      </div>
      <div class="integrations__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/integrations/scientific-games.png" alt="">
      </div>
      <div class="integrations__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/integrations/siteminder.png" alt="">
      </div>
      <div class="integrations__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/integrations/webrezpro.png" alt="">
      </div>
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

    <div class="featured-resources__title"><h3>Partner Resources</h3></div>

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
