<?php
/**
 * The template for displaying Integrations page.
 *
 * Template Name: Integrations
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
        <div class="page-header__features">
            <p>Seamless PMS Integrations</p>
            <p>Channel Management, Payment Gateways, and More</p>
        </div>
    </div>
</section>

<section class="pms-integrations wrap row">

  <div class="col-left">
    <h2 class="section-title">PMS Integrations</h2>
    <p>Don't see an integration listed here that you need? <a href="<?php echo get_site_url(); ?>/contact/">Contact us</a> for more information.</p>
  </div>

  <div class="col-right row">
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/agilysys.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/atrio.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/autoclerk.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/cheerze.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/epitome.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/guest-centrix.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/innfinity.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/innsuites.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/lodgical-solution.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/maestro.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/maximojo.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/msi.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/newbook.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/oracle.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/silverbyte.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/protel.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/resort-data-processing.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/resort-share.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/reznext.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/room-key-pms.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/roommaster.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/sms.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/stay-n-touch.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/webrezpro.png" alt=""></div>
  </div>

</section>

<section class="distribution-partners wrap row">

  <div class="col-left">
    <h2 class="section-title">Distribution Partners</h2>
  </div>

  <div class="col-right row">
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/amadeus.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/best-western.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/ctrip.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/derbysoft.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/dhisco.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/hotel-availabilities.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/ideas.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/kognitiv.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/leonardo.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/rainmaker.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/rategain.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/rate-tiger.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/sabre.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/seekda.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/siteminder.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/travelport.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/wihp.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/yieldplanet.png" alt=""></div>
  </div>

</section>

<section class="revenue-management wrap row">

  <div class="col-left">
    <h2 class="section-title">Revenue Management</h2>
  </div>

  <div class="col-right row justify-content-start">
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/ideas.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/lodgiq.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/rainmaker.png" alt=""></div>
  </div>

</section>

<section class="payment-gateways wrap row">

  <div class="col-left">
    <h2 class="section-title">Payment Gateways</h2>
  </div>

  <div class="col-right row justify-content-start">
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/jcc-payments.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/shift4.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/simple-pay.png" alt=""></div>
  </div>

</section>

<section class="additional-connections wrap row">

  <div class="col-left">
    <h2 class="section-title">Additional Connections</h2>
  </div>

  <div class="col-right row justify-content-start">
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/aristocrat.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/flip-to.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/nor1.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/scientific-games.png" alt=""></div>
    <div class="integrations__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/integrations/stay-wanderful.png" alt=""></div>
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

get_footer();
