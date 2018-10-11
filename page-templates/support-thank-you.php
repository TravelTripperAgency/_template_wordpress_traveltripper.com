<?php
/**
 * The template for displaying the support page thank you message
 *
 * Template Name: Support Thank You
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

<section class="wrap form">

    <p class="success-message">Thanks for contacting us! We will get in touch with you shortly.</p>

</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
