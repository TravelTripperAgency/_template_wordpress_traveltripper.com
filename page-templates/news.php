<?php
/**
 * The template for displaying the news page
 *
 * Template Name: News
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
  <div class="wrap row">
    <div class="page-header__title-area">
      <h1 class="page-header__title">News & Press</h1>
      <p class="page-header__description">Travel Tripper in the news and our latest press releases and announcements</p>
    </div>
    <div class="page-header__cta">
      <p>Become an expert hotel marketer with our free resources.</p>
      <div class="btn-holder">
        <a class="btn btn-white" href="#">subscribe</a>
      </div>
    </div>
  </div>
</section>

<section class="featured-news">
  <div class="row">

    <div class="featured-news__item">
      <a href="<?php echo get_site_url(); ?>/news-single/"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt="437x255"></a>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">6 hotel booking trends we're watching in 2018</a></p>
    </div>

    <div class="featured-news__item">
      <a href="<?php echo get_site_url(); ?>/news-single/"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt="437x255"></a>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">How to encourage guests to write hotel reviews on TripAdvisor, Yelp, Google and Facebook</a></p>
    </div>

    <div class="featured-news__item">
      <a href="<?php echo get_site_url(); ?>/news-single/"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt="437x255"></a>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">5 ways hotels can use behavioral economics to improve conversion rates</a></p>
    </div>

    <div class="featured-news__item">
      <a href="<?php echo get_site_url(); ?>/news-single/"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt="437x255"></a>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">The importance of data transparency in hotel marketing</a></p>
    </div>

    <div class="featured-news__item">
      <a href="<?php echo get_site_url(); ?>/news-single/"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt="437x255"></a>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">6 hotel booking trends we're watching in 2018</a></p>
    </div>

    <div class="featured-news__item">
      <a href="<?php echo get_site_url(); ?>/news-single/"><img src="<?php echo get_template_directory_uri(); ?>/images/437x255.png" alt="437x255"></a>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">Travel Tripper partners with Meriton Serviced Apartments, bringing its innovative booking solutions to 17 properties in Australia's leading luxury accommodation brand</a></p>
    </div>

  </div>
</section>

<section class="old-news">
  <div class="wrap">

    <div class="old-news__title"><h2>Older News and Announcements</h2></div>

    <div class="old-news__item">
      <p class="entry-meta"><time class="entry-time" datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">6 hotel booking trends we're watching in 2018</a></p>
    </div>

    <div class="old-news__item">
      <p class="entry-meta"><time class="entry-time" datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">How to encourage guests to write hotel reviews on TripAdvisor, Yelp, Google and Facebook</a></p>
    </div>

    <div class="old-news__item">
      <p class="entry-meta"><time class="entry-time" datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">5 ways hotels can use behavioral economics to improve conversion rates</a></p>
    </div>

    <div class="old-news__item">
      <p class="entry-meta"><time class="entry-time" datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">The importance of data transparency in hotel marketing</a></p>
    </div>

    <div class="old-news__item">
      <p class="entry-meta"><time class="entry-time" datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">5 ways hotels can use behavioral economics to improve conversion rates</a></p>
    </div>

    <div class="old-news__item">
      <p class="entry-meta"><time class="entry-time" datetime="2018-02-06T01:57:18+00:00">February 6, 2018</time></p>
      <p><a href="<?php echo get_site_url(); ?>/news-single/">The importance of data transparency in hotel marketing</a></p>
    </div>

    <div class="btn-holder"><a href="#" class="btn btn-secondary-white">load more</a></div>

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
</section> <?php

get_footer();
