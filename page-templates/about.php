<?php
/**
 * The template for displaying the about page
 *
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title"><?php the_title(); ?></h1> <?php
      if ( get_field( 'header_description' ) ) { ?>
          <p class="page-header__description"><?php the_field( 'header_description' ); ?></p> <?php
      } ?>
    </div>
    <div class="page-header__feature">
      <ul class="page-header__features">
        <li>Founded in 2005</li>
        <li>One of the 10 Best Places to Work in Hotel Tech 2018</li>
      </ul>
    </div>
  </div>
</section>

<section class="hoteliers">

    <div class="col-left">
      <h2 class="section-title">Built by hoteliers<span class="d-none d-sm-inline"> for hoteliers</span></h2>
      <p>Travel Tripper is a hotel tech provider and strategic digital partner helping hotels worldwide to increase direct bookings and maximize revenue. Known in the industry for its constant innovation and exceptional expertise, Travel Tripper empowers hotels to dominate from search to stay with its comprehensive suite of solutions, including <a href="<?php echo get_site_url(); ?>/solutions/booking-engine/">booking engine and CRS</a>, <a href="<?php echo get_site_url(); ?>/solutions/hotel-website-design/">web design and development</a>, and <a href="<?php echo get_site_url(); ?>/solutions/hotel-digital-marketing/">digital marketing management</a>.</p>
    </div>

    <div class="col-right background-image">
      <p class="caption">Travel Tripper sales conference 2016</p>
    </div>

</section>

<section class="success">

    <div class="col-right">
      <h2 class="section-title">Direct success together</h2>
      <p>At Travel Tripper, being direct is not just a distribution strategy—it's our philosophy. We are an ambitious and innovative group constantly striving to find ways to make our solutions better, faster, and more powerful for our clients.</p>
      <p class="blue-bold">Because with us, our success depends <em>directly</em> on yours.</p>
    </div>

    <div class="col-left">
      <figure class="wp-caption">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/about-platinum-adrian-step-repeat-min.png, <?php echo get_template_directory_uri(); ?>/images/about-platinum-adrian-step-repeat@2x-min.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/about-platinum-adrian-step-repeat@2x-min.png" alt="Platinum Adrian Award">
        <figcaption class="wp-caption-text">Travel Tripper web agency team after receiving a Platinum Adrian Award for digital marketing excellence at the 60th annual Adrian Awards.</figcaption>
      </figure>
    </div>

</section>

<section class="headlines">

    <div class="col-left">
      <div class="wrap">
        <h2 class="section-title">Making headlines</h2>
        <p>Travel Tripper's team features many experts and thought leaders in the world of hotel distribution and marketing. In addition to winning multiple tech and digital marketing awards, Travel Tripper has been featured in prominent industry publications.</p>
        <p>Check out <a href="<?php echo get_site_url(); ?>/news-and-press/">News and Press</a> to see the latest headlines, or check out <a href="<?php echo get_site_url(); ?>/resources/">Resources</a> or <a href="<?php echo get_site_url(); ?>/blog/">Blog</a> to read the latest from our team experts.</p>
      </div>
    </div>

    <div class="col-right">

      <div class="media">
        <div class="d-flex"><p class="title">As featured on</p></div>
        <div class="row">
          <div class="media__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/media/media-ABC_News.png, <?php echo get_template_directory_uri(); ?>/images/media/media-ABC_News@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/media/media-ABC_News@2x.png" alt="ABCNews Logo">
          </div>
          <div class="media__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/media/media-fortune-logo.png, <?php echo get_template_directory_uri(); ?>/images/media/media-fortune-logo@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/media/media-fortune-logo@2x.png" alt="Fortune Logo">
          </div>
          <div class="media__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/media/media-Conde_Nast_Traveler_logo.png, <?php echo get_template_directory_uri(); ?>/images/media/media-Conde_Nast_Traveler_logo@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/media/media-Conde_Nast_Traveler_logo@2x.png" alt="Conde Nast Traveler Logo">
          </div>
          <div class="media__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/media/media-the-caterer-logo.png, <?php echo get_template_directory_uri(); ?>/images/media/media-the-caterer-logo@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/media/media-the-caterer-logo@2x.png" alt="The Caterer Logo">
          </div>
          <div class="media__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/media/media-tnooz-logo.png, <?php echo get_template_directory_uri(); ?>/images/media/media-tnooz-logo@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/media/media-tnooz-logo@2x.png" alt="tnooz logo">
          </div>
        </div>
      </div>

      <div class="award">
        <div class="d-flex"><p class="title">Awards & Recognition</p></div>
        <div class="row">
          <div class="award__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/awards/Tech-Ovation-Logo.png, <?php echo get_template_directory_uri(); ?>/images/awards/Tech-Ovation-Logo@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/awards/Tech-Ovation-Logo@2x.png" alt="">
          </div>
          <div class="award__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/awards/award-adrian2016.png, <?php echo get_template_directory_uri(); ?>/images/awards/award-adrian2016@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/awards/award-adrian2016@2x.png" alt="">
          </div>
          <div class="award__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/awards/awards-adrian-hsmai.png, <?php echo get_template_directory_uri(); ?>/images/awards/awards-adrian-hsmai@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/awards/awards-adrian-hsmai@2x.png" alt="">
          </div>
          <div class="award__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/awards/awards-w3.png, <?php echo get_template_directory_uri(); ?>/images/awards/awards-w3@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/awards/awards-w3@2x.png" alt="">
          </div>
          <div class="award__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/awards/award-HTR-CRS.png, <?php echo get_template_directory_uri(); ?>/images/awards/award-HTR-CRS@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/awards/award-HTR-CRS@2x.png" alt="">
          </div>
          <div class="award__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/awards/award-HTR-agency.png, <?php echo get_template_directory_uri(); ?>/images/awards/award-HTR-agency@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/awards/award-HTR-agency@2x.png" alt="">
          </div>
          <div class="award__logo">
            <img srcset="<?php echo get_template_directory_uri(); ?>/images/awards/awards-Landys.png, <?php echo get_template_directory_uri(); ?>/images/awards/awards-Landys@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/awards/awards-Landys@2x.png" alt="">
          </div>
        </div>
      </div>

    </div>

</section>

<section class="join-us">

    <div class="col-left">
      <div class="wrap">
        <h2 class="section-title"><a href="https://www.linkedin.com/jobs/search/?f_C=242998&locationId=OTHERS.worldwide">We are growing—join us!</a></h2>
        <p>Travel Tripper is a dynamic, fast-growing company with 150+ employees across three offices in New York, London, and Hyderabad. Our talented team comprises professionals with diverse backgrounds and expertise in the fields of hospitality, technology, marketing, web and product development, analytics and more.</p>
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/about-bestplaces-hotel-tech-award-min.png, <?php echo get_template_directory_uri(); ?>/images/about-bestplaces-hotel-tech-award@2x-min 2x" src="<?php echo get_template_directory_uri(); ?>/images/about-bestplaces-hotel-tech-award@2x-min" alt="Hotel Tech Awards">
      </div>
    </div>

    <div class="col-right background-image">
      <p class="caption">Travel Tripper's team enjoying the annual summer retreat.</p>
    </div>

</section> <?php

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
