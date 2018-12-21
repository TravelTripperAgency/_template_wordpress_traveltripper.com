<?php
/**
 * The template for displaying the Partners page.
 *
 * Template Name: Partners
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<section id="skip-link-content" class="page-header">
    <div class="wrap">
        <div class="page-header__title-area">
            <h1 class="page-header__title"><?php the_title(); ?></h1> <?php
            if ( get_field( 'header_description' ) ) { ?>
                <p class="page-header__description"><?php the_field( 'header_description' ); ?></p> <?php
            } ?>
            <div class="btn-holder">
                <a class="btn btn-primary" href="<?php echo get_site_url(); ?>/contact/">work with us</a>
            </div>
        </div>
    </div>
</section>

<section class="partners-join">

    <div class="col-left">
        <div class="col-left__inner">
            <h2 class="section-title"><?php the_field( 'partners_intro_section_title' ); ?></h2> <?php
            the_field( 'partners_intro_content' ); ?>
        </div>
    </div>

    <div class="col-right background-image" style="background-image: url('<?php
    the_field( 'partners_intro_image' ); ?>')"></div>

</section>

<section class="partner-integrations">

    <div class="col-right">
        <div class="col-right__inner">
            <h2 class="section-title"><?php the_field( 'partners_integrations_section_title' ); ?></h2> <?php
            the_field( 'partners_integrations_content' ); ?>
            <a class="btn btn-secondary-white" href="<?php the_field( 'partners_integrations_button_link' ); ?>"><?php the_field( 'partners_integrations_button_text' ); ?></a>
        </div>
    </div>

    <div class="col-left">
        <div class="col-left__inner"> <?php
            while( have_rows( 'partners_integrations_logos' ) ) : the_row(); ?>

                <div class="integrations__logo"> <?php
                    echo wp_get_attachment_image( get_sub_field( 'logo' ), 'full' ); ?>
                </div> <?php

            endwhile; ?>
        </div>
    </div>

</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
