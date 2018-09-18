<?php
/**
 * The template for displaying the Who We Serve page.
 *
 * Template Name: Who We Serve
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
    <div class="wrap row">
        <div class="page-header__title-area">
            <h1 class="page-header__title"><?php the_title(); ?></h1>
        </div>
        <div class="page-header__feature"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/serve-landing-header.png"> <?php
            } ?>
        </div>
    </div>
</section>

<section class="intro wrap">

  <div class="col">
    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-hotel-groups-hover.svg" alt="">
    <p class="title">Hotel Groups and Management Companies</p>
    <p class="description">Stay ahead of marketing and distribution trends with our scalable multi-property solution.</p>
    <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
  </div>

  <div class="col">
    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-casinos-hover.svg" alt="">
    <p class="title">Casino and Gaming Properties</p>
    <p class="description">Serve your most loyal guests just as easily online as offline.</p>
    <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
  </div>

  <div class="col">
    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-independent-hotels-hover.svg" alt="">
    <p class="title">Independent and Boutique Hotels</p>
    <p class="description">Power your hotel's e-commerce with a partner invested in your success.</p>
    <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
  </div>

  <div class="col">
    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-partners-hover.svg" alt="">
    <p class="title">Partners</p>
    <p class="description">Join the Travel Tripper partner network.</p>
    <p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
  </div>

</section>

<section class="clientele">
  <div class="wrap">

    <header class="section-header">
      <h2 class="section-title">Global Clientele</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/earth-map.png" alt="Map of Earth">
      <p>Travel Tripper exclusively serves the hospitality industry with notable clients around the world.</p>
    </header>

    <div class="row">

      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-eldorado.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-eldorado@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-eldorado@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-ic.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-ic@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-ic@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-library-hotel.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-library-hotel@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-library-hotel@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-kk.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-kk@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-kk@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-golden-nugget.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-golden-nugget@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-golden-nugget@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-menin.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-menin@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-menin@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-tsokkos.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-tsokkos@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-tsokkos@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-stay-well.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-stay-well@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-stay-well@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-kokua.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-kokua@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-kokua@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-elite.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-elite@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-elite@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-high-gate.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-high-gate@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-high-gate@2x.png" alt="">
      </div>
      <div class="col">
        <img srcset="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-meriton.png, <?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-meriton@2x.png 2x" src="<?php echo get_template_directory_uri(); ?>/images/clients/logo-global-client-meriton@2x.png" alt="">
      </div>

    </div>

    <div class="testimonial">
        <p class="quote">I really love working with the team at Travel Tripper. Everyone from our account manager, to our client support team, to the product specialists have just been a dream to work with. It's been like night and day in comparison to previous vendors that we've had in similar space.</p>
        <p class="cite">ERIC GOODEN - Marketing Manager, Bellstar Hotels & Resorts</p>
    </div>

  </div>
</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_footer();
