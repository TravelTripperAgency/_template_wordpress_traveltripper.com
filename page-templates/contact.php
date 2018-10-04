<?php
/**
 * The template for displaying the contact page
 *
 * Template Name: Contact
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
  </div>
</section>

<section class="wrap contact-details">

    <div class="email">

      <div class="email__customer-support">
        <p class="title">Customer Support</p>
        <p>CRS and Booking Engine: <a href="mailto:support@traveltripper.com">support@traveltripper.com</a></p>
        <p>Travel Tripper Web: <a href="mailto:web@traveltripper.com">web@traveltripper.com</a></p>
        <p>Digital Marketing: <a href="mailto:dgs@traveltripper.com">dgs@traveltripper.com</a></p>
      </div>

      <div class="email__sales">
        <p class="title">Sales Inquiries</p>
        <p>To learn more about Travel Tripper or to request a demo, contact us today.</p>
        <p>North and South America: <a href="mailto:ussales@traveltripper.com">ussales@traveltripper.com</a></p>
        <p>Europe, Middle East and Africa: <a href="mailto:uksales@traveltripper.com">uksales@traveltripper.com</a></p>
        <p>Asia or Australia: <a href="mailto:apacsales@traveltripper.com">apacsales@traveltripper.com</a></p>
      </div>

      <div class="email__marketing">
        <p class="title">Marketing Inquiries</p>
        <p>For press requests or partnership-related inquiries, please contact <a href="mailto:marketing@traveltripper.com">marketing@traveltripper.com</a></p>
      </div>

      <div class="email__billing">
        <p class="title">Billing Inquiries</p>
        <p>For questions related to billing and accounts payable, please contact <a href="mailto:accounting@traveltripper.com">accounting@traveltripper.com.</a></p>
      </div>

      <div class="email__careers">
        <p class="title">Career Inquiries</p>
        <p>To learn about open career opportunities, please visit our <a href="https://www.linkedin.com/jobs/search/?f_C=242998&locationId=OTHERS.worldwide" rel="nofollow" target="_blank">LinkedIn page</a>.</p>
      </div>

    </div>

    <div class="form"> <?php

        if ( is_plugin_active( 'gravityforms/gravityforms.php' ) ) { ?>
            <p>For all other inquiries, please use the following form:</p> <?php
            gravity_form( 1, false, false, false, '', false );
        } ?>

    </div>

</section>

<section class="locations">

    <div class="wrap">
        <p class="section-title">Office Locations</p>
    </div>

    <div class="row">

      <div class="location america">
        <div class="location__wrap">
          <p class="title">New York</p>
          <p>370 Lexington Avenue, Suite 1601</p>
          <p>New York, NY 10017</p>
          <p>United States</p>
          <p>+1.212.683.6161</p>
        </div>
      </div>

      <div class="location europe">
        <div class="location__wrap">
          <p class="title">London</p>
          <p>25 Moorgate</p>
          <p>London EC2R 6AY</p>
          <p>United Kingdom</p>
          <p>uksales@traveltripper.com</p>
        </div>
      </div>

      <div class="location asia">
        <div class="location__wrap">
          <p class="title">Hyderabad, India</p>
          <p>307-309, 3rd Floor,</p>
          <p>Manjeera Trinity Corporate,</p>
          <p>JNTU - Hitech City Road, Kukatpally,</p>
          <p>Hyderabad, Telangana 500072</p>
          <p>India</p>
          <p>+91 40 3002 4444</p>
        </div>
      </div>

    </div>

</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
