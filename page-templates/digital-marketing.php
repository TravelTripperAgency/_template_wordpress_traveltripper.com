<?php
/**
 * The template for displaying the Digital Marketing page.
 *
 * Template Name: Digital Marketing
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
    <div class="wrap row">
        <div class="page-header__title-area<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>">
            <h1 class="page-header__title"><?php the_title(); ?></h1> <?php
            if ( get_field( 'header_subtitle' ) ) { ?>
                <p class="page-header__subtitle"><?php the_field( 'header_subtitle' ); ?></p> <?php
            }
            if ( get_field( 'header_description' ) ) { ?>
                <p class="page-header__description"><?php the_field( 'header_description' ); ?></p> <?php
            } ?>
            <div class="btn-holder">
                <a class="btn btn-primary" href="https://try.traveltripper.com/request-demo/?utm_source=website&utm_content=digitalmarketing">request a demo</a>
            </div>
        </div>
        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/solutions-dgs-header.png"> <?php
            } ?>
            <ul class="page-header__features">
                <li>Maximize ROI/ROAS across all channels</li>
                <li>Compete effectively against OTAs</li>
                <li>Complete data transparency</li>
            </ul>
        </div>
    </div>
</section>

<section class="intro row">

  <div class="col-right">
    <div class="col-right__wrap">

      <h2 class="section-title">Get in front of your audience and stay ahead of the OTAs with intelligent marketing</h2>

      <p>Compete effectively for online traffic against OTAs and travel companies with bigger marketing budgets using Travel Tripper's innovative technology and forward-thinking strategy. </p>

      <div class="row">
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-magnifying-glass.svg" alt="magnifying glass icon">Search engine marketing</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-dispaly-ad.svg" alt="ad icon">Display marketing & Retargeting</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-meta.svg" alt="search ads icon">Metasearch marketing</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-social.svg" alt="social icon">Social media marketing</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-pencil-ruler.svg" alt="ruler pencil icon">Display ad creative services</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-booking-panel.svg" alt="dashboard icon">Keyword monitoring platform</p>
      </div>

      <div class="btn-holder">
        <a href="javascript:void(0)" id="download-button" class="btn btn-primary-white"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-pdf.svg" alt="pdf icon">Download our Digital Marketing features sheet</a>
      </div>

    </div>
  </div>

  <div class="col-left">
    <figure>
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-dgs-intro.png, <?php echo get_template_directory_uri(); ?>/images/solutions-dgs-intro@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-dgs-intro@2x.png" alt="display of iPhones">
    </figure>
  </div>

</section>

<section class="spacer background-image"></section>

<section class="real-time-ads row">

  <div class="col-left">
    <div class="col-left__wrap">

      <h2 class="section-title">Award-winning & industry-first innovations that achieve record-breaking returns on your ad spend</h2>
      <p class="blue">Real Time Ads (RTAs) use real-time information populated directly from the booking engine into Google AdWords.</p>
      <p>Now we can display your current room rate, occupancy rate, rooms available, and number of recently booked rooms directly within Google search ads. Our studies show that by using Real Time Ads, you’ll see significant increases in conversion rates and decreases in cost per conversion, and you can expect to more than double your return on ad spend.</p>

      <div class="row">
        <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/awards/awards-w3@2x.png" alt="w3 award"></div>
        <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/awards/awards-Landys@2x.png" alt="landys award"></div>
        <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/awards/awards-adrian-hsmai@2x.png" alt="adrian awards"></div>
      </div>

      <div class="btn-holder">
        <a href="#" class="btn btn-primary-white"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-pdf.svg" alt="pdf icon">Download our case study on RTAs</a>
      </div>

    </div>
  </div>

  <div class="col-right"></div>

</section>

<section class="why background-image">
  <div class="wrap">

    <h2 class="section-title">Why work with Travel Tripper</h2>

    <div class="reasons">

      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-lightbulb-white.svg" alt="lightbult icon">
        <p class="title">Innovation</p>
        <p class="description">From Google Real Time Ads to Yelp listings, Travel Tripper is leading the hospitality industry on innovative techniques and tools in digital marketing.</p>
      </div>

      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-magnifying-glass-white.svg" alt="magnifying glass icon">
        <p class="title">Transparency</p>
        <p class="description">You own and access your raw data direct from the source. No hidden fees, no proprietary dashboards, no questionable attribution models.</p>
      </div>

      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-expertise.svg" alt="gear head icon">
        <p class="title">Expertise</p>
        <p class="description">Hotels that use RezTrip and Travel Tripper Web can take advantage of integrated data to better tailor their marketing campaigns and achieve higher ROI.</p>
      </div>

    </div>

    <div class="partners">
      <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/partner-google@2x.png" alt="Google Partner logo"></div>
      <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/partner-Yelp_Badge@2x.png" alt="Yelp Ad partner"></div>
      <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/partner-bing@2x.png" alt="bing ads"></div>
    </div>

  </div>
</section>

<section class="conversion row">

  <div class="col-left">

    <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInLeft"'; } ?>>
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-dgs-adwords.png, <?php echo get_template_directory_uri(); ?>/images/solutions-dgs-adwords@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-dgs-adwords@2x.png" alt="Google Adwords">
    </figure>

    <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>" data-wow-delay=".5s">
      <div class="showcase__left">
        <p class="showcase__increase">7X<span>+</span></p>
        <p class="showcase__revenue">increase on roas</p>
        <a href="#" class="btn btn-primary">see how we did it</a>
      </div>
      <div class="showcase__right">
        <p>We helped ROW NYC increase their return on ad spend by sevenfold using Real-Time Ads with real-time pricing and availability pulled directly from RezTrip.</p>
      </div>
    </div>

  </div>

  <div class="col-right">

    <div class="testimonial<?php if ( !wp_is_mobile() ) { echo ' animated wow fadeIn'; } ?>" data-wow-delay=".5s">
      <p class="quote">With real-time ads, we see a leap in returns and a reduction in wasted spend.</p>
      <p class="cite">KUNAL PATEL, Director of Revenue Management, ROW NYC</p>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/images/hotel-tech-report.png" alt="Hotel Tech Report Reviews">

  </div>

</section>

<section class="spacer-2 background-image"></section>

<section class="services">
  <div class="wrap row">

    <div class="title-row">
      <h2 class="section-title">Power up direct bookings by integrating Digital Marketing with RezTrip and Travel Tripper Web</h2>
      <p class="section-subtitle">Travel Tripper's suite of solutions together create a robust hotel e-commerce platform designed to maximize your hotel's direct distribution strategy.</p>
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
</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
