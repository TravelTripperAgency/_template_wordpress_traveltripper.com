<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Travel_Tripper
 */

get_header(); ?>

<main id="skip-link-content" class="content background-image">

    <section class="error-404 not-found">

        <h1><?php esc_html_e( 'We are sorry, but it looks like the page you are looking for has been moved or doesn&rsquo;t exist anymore.', 'traveltripper' ); ?></h1>

        <?php get_search_form(); ?>

        <p><?php esc_html_e( 'Please learn more about our CRS & booking engine, website platform, and digital marketing services below or you can search what you are looking for.', 'traveltripper' ); ?></p>

    </section>

</main> <?php

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_footer();
