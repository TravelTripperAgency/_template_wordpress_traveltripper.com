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
        <div class="page-header__title-area<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>">
            <h1 class="page-header__title"><?php the_title(); ?></h1>
            <p class="page-header__description"><?php the_field( 'header_description' ); ?></p>
            <div class="btn-holder">
                <a class="btn btn-primary" href="#">request a demo</a>
            </div>
        </div>
        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/independent-header.png"> <?php
            } ?>
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
        <h2 class="section-title"><?php the_field( 'slider_section_title' ); ?></h2>
    </div> <?php

    if ( have_rows( 'slider_images' ) ) { ?>

        <div class="owl-carousel client-slider"> <?php

            while ( have_rows( 'slider_images' ) ) : the_row(); ?>

                <div class="item background-image" style="background-image: url('<?php the_sub_field( 'slider_image' ); ?>');"></div> <?php

            endwhile; ?>

        </div> <?php

    } ?>

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
      <p class="service__description">Shift bookings from high-commission OTA channels to direct bookings using smart rate and revenue management tools.</p>
      <p class="service__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>
    <div class="service web">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ttweb-hover.svg" alt="">
      <p class="service__title">Travel Tripper Web</p>
      <p class="service__subtitle">Website Platform and Agency</p>
      <p class="service__description">Change lookers into bookers with beautiful design and smart content like live rates and special offers.</p>
      <p class="service__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>
    <div class="service dgs">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-digital-marketing-hover.svg" alt="">
      <p class="service__title">Digital Marketing</p>
      <p class="service__description">Maximize ROI across all online advertising channels with cutting edge technology and strategy, including our award-winning Real Time Ads for hotels.</p>
      <p class="service__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
    </div>
  </div>

</section>

<section class="integrations">

  <div class="row">

    <div class="col-left">

      <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInLeft"'; } ?>>
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/independent-showcase.png, <?php echo get_template_directory_uri(); ?>/images/independent-showcase@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/independent-showcase@2x.png" alt="Travel Tripper Website Example">
      </figure>

      <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>" data-wow-delay=".5s">
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

</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
