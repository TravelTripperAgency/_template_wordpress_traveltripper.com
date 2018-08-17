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
    <div class="page-header__title-area">
      <h1 class="page-header__title"><?php the_title(); ?></h1>
      <p class="page-header__subtitle"><?php the_field( 'header_subtitle' ); ?></p>
      <p class="page-header__description"><?php the_field( 'header_description' ); ?></p>
      <div class="btn-holder">
        <a class="btn btn-primary" href="#">request a demo</a>
      </div>
    </div>
    <div class="page-header__feature">
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-dgs-header.png, <?php echo get_template_directory_uri(); ?>/images/solutions-dgs-header@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-dgs-header@2x.png" alt="Websites Header Graphic">
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
        <a href="#" class="btn btn-primary-white"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-pdf.svg" alt="pdf icon">Download our Digital Marketing features sheet</a>
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

      <h2 class="section-title">Award winning & industry-first innovations that achieve record breaking returns on your ad spend</h2>
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
        <p class="description">From our Google Real-Time Ads to Yelp listings, Travel Tripper is leading the hospitality industry on innovative techniques and tools in digital marketing.</p>
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

    <figure>
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-dgs-adwords.png, <?php echo get_template_directory_uri(); ?>/images/solutions-dgs-adwords@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-dgs-adwords@2x.png" alt="Google Adwords">
    </figure>

    <div class="showcase">
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

    <div class="testimonial">
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
      <h2 class="section-title">Power up direct bookings by integrating Travel Tripper Web with RezTrip and Digital Marketing</h2>
      <p class="section-subtitle">When you work with our digital marketing team, we are able to create seamless campaigns because we have insights into your booking and website data.</p>
    </div>

    <figure>
      <img srcset="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-pre-footer-promo.png, <?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-pre-footer-promo@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/solutions-reztrip-pre-footer-promo@2x.png" alt="Services Example">
    </figure>

    <div class="row">
      <div class="col">
        <img src="#" alt="magnifying glass icon">
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
      <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-reztrip.svg" alt="Booking Engine icon">
      <p class="pre-footer-link__headline">RezTrip</p>
      <p class="pre-footer-link__description">Shift bookings from high-commission channels to direct bookings with the industry's most innovative website platform and booking engine.<span></span></p>
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

    <div class="featured-resources__title"><h3>Digital Marketing Resources</h3></div>

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
