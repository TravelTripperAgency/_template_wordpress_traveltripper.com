<?php
/**
 * The template for displaying Integrations page.
 *
 * Template Name: Integrations
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
</section> <?php

if ( have_rows( 'integrations_page_section' ) ) :
    while ( have_rows( 'integrations_page_section' ) ) : the_row(); ?>

        <section class="integrations-section wrap row">

            <div class="col-left">
                <h2 class="section-title"><?php the_sub_field( 'integrations_section_title' ); ?></h2> <?php
                if ( get_sub_field( 'integrations_section_description' ) ) {
                    the_sub_field( 'integrations_section_description' );
                } ?>
            </div>

            <div class="col-right"> <?php
                if ( have_rows( 'integrations_section_logos' ) ) :
                    while ( have_rows( 'integrations_section_logos' ) ) : the_row();

                        $image = get_sub_field( 'integration_logo' );
                        $size = 'medium'; // (thumbnail, medium, large, full or custom size)

                        if ( $image ) { ?>
                            <div class="integrations__logo"> <?php
                                if ( get_sub_field( 'integration_link' ) ) { ?>
                                    <a href="<?php the_sub_field( 'integration_link' ) ?>"> <?php
                                }
                                echo wp_get_attachment_image( $image, $size );
                                if ( get_sub_field( 'integration_link' ) ) { ?>
                                    </a> <?php
                                } ?>
                            </div> <?php
                        }

                    endwhile;
                endif; ?>
            </div>

        </section> <?php

    endwhile;
endif;

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_template_part( 'template-parts/content', 'internal-ad' );

get_footer();
