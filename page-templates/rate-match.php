<?php
/**
 * The template for displaying the Rate Match page.
 *
 * Template Name: Rate Match
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
                <a class="btn btn-primary" href="http://try.traveltripper.com/request-demo/?utm_source=website&utm_content=ratematch">request a demo</a>
            </div>
        </div>
        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/rate-match-header.png"> <?php
            } ?>
        </div>
    </div>
</section>

<section class="intro row wrap">

  <div class="col-right">
    <div class="col-right__wrap">
      <p>Real-time price checks with OTAs</p>
      <p>Automate your best rate guarantee</p>
      <p>Comprehensive pricing analytics</p>
    </div>
  </div>

  <div class="col-left">
    <h2 class="section-title">Price-checking and rate-matching in one powerful tool</h2>
    <p>Never be out of parity with the OTAs again. Our innovative tool not only notifies you when it finds a lower  price elsewhere, it can also match the price and make the lower rate instantly bookable.</p>
  </div>

</section>

<section class="video">
    <div class="video-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/rta-onscreen.jpg">
    </div>
</section>

<section class="features wrap">
    <ol>
        <li>Rate Match launches into action the moment a guest shops your booking engine for rates.</li>
        <li>Our price checker first checks the major OTA sites to compare rates your hotel website’s rates. </li>
        <li>If a lower price is found on another site, our rate matching tool works automatically to adjust your published rates to match or beat that price (based on your configurable settings).</li>
        <li>The guest never sees that you’re out of parity—and can confidently book the lowest rate directly through your site.</li>
    </ol>
    <div class="btn-holder">
      <a href="javascript:void(0)" id="download-button" class="btn btn-primary-white"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-pdf.svg" alt="pdf icon">Download the Rate Match features sheet</a>
    </div>
</section>

<section class="conversion">
    <div class="background-image">

        <div class="col-left">

            <figure<?php if ( !wp_is_mobile() ) { echo ' class="animated wow slideInLeft"'; } ?>>
                <img srcset="<?php echo get_template_directory_uri(); ?>/images/rate-match-metric-mobile-phone.png, <?php echo get_template_directory_uri(); ?>/images/rate-match-metric-mobile-phone@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/rate-match-metric-mobile-phone@2x.png" alt="TripAdvisor iPhone">
            </figure>

            <div class="showcase<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>" data-wow-delay=".5s">
                <div class="showcase__metrix">
                    <p class="showcase__metrix-number"><span>+</span>50%</p>
                    <p class="showcase__metrix-text">increase in conversion rates</p>
                    <a href="http://www.traveltripper.com/blog/travel-tripper-rate-match-is-a-2016-techovation-finalist/" class="btn btn-primary">see how we did it</a>
                </div>
                <div class="showcase__description">
                    <p>A New York hotel saw its conversion rate jump almost 50% within 10 days of implementing Rate Match.</p>
                </div>
            </div>

        </div>

        <div class="col-right">
            <div class="col-right__wrap">

                <div class="testimonial<?php if ( !wp_is_mobile() ) { echo ' animated wow fadeIn'; } ?>" data-wow-delay=".5s">
                    <p class="quote">The support & responsiveness from the team is great. Travel Tripper's focus on improving direct revenues with new features allows us to keep common efforts easily aligned.</p>
                    <p class="cite">- Independent Hotel Marketing Manager on Hotel Tech Report</p>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/images/hotel-tech-report.png" alt="Hotel Tech Report Reviews">

            </div>
        </div>

    </div>
</section>

<section class="dashboard row">

    <div class="col-left">
        <div class="wrap">
            <h2 class="section-title">Make disparity a rarity</h2>
            <p class="description">Rate Match’s dashboard gives you comprehensive insights from your real-time price checks, including:</p>
            <div class="row features">
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-parity.svg" alt="parity icon">Rate parity performance</p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-list.svg" alt="list icon">Top out-of-parity OTAs</p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-booking-panel.svg" alt="booking panel icon">Bookings and revenue generated</p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-keyword-monitor.svg" alt="conversion rate icon">Conversion rates</p>
            </div>
        </div>
    </div>

    <div class="col-right"></div>

</section>

<section class="spacer background-image"></section>

<section class="advantages row">

    <div class="col-right">
        <div class="wrap">
            <h2 class="section-title">Advantages of automated rate matching</h2>
            <div class="description">
                <p>Rate Match eliminates the flaw in traditional price-checking tools: what happens when rates are found to be lower on the OTAs.</p>
                <p>Other tools will simply not display the lower prices, or will tell travelers to call to get a price match offer. Rate Match eliminates this unnecessary step and automatically adjusts the Best Available Rate to match any lower rate it finds, which then becomes instantly bookable.</p>
            </div>
            <div class="row features">
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-book-now.svg" alt="book now icon">Entice guests to book direct</p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ribbon.svg" alt="ribbon icon">Offer additional discounts to guarantee to the lowest price</p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-tools.svg" alt="tools icon">Set rate match offers terms and conditions</p>
            </div>
            <a class="btn btn-primary" href="#">schedule a demo</a>
        </div>
    </div>

    <div class="col-left"></div>

</section> <?php

get_footer();
