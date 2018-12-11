<?php
/**
 * The template for displaying the Solutions page.
 *
 * Template Name: Solutions
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/solutions-landing-header.png"> <?php
            } ?>
        </div>
    </div>
</section>

<section class="intro wrap"> <?php

    while ( have_rows( 'solutions_solutions' ) ) : the_row();

        // Get the post ID from the page title field
        $post_id = get_sub_field( 'title', false, false ); ?>

        <div class="col"> <?php
            echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full' ); ?>
            <p class="title"><a href="<?php echo get_the_permalink( $post_id ); ?>"><?php echo get_the_title($post_id); ?></a></p> <?php
            if ( get_sub_field( 'subtitle' ) ) { ?>
                <p class="subtitle"><?php the_sub_field( 'subtitle' ); ?></p> <?php
            } ?>
            <p class="description"><?php the_sub_field( 'description' ); ?></p>
            <p class="arrow"><a href="<?php echo get_the_permalink( $post_id ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></a></p>
        </div> <?php

    endwhile; ?>

</section>

<section class="choose">
    <div class="wrap">

        <h2 class="section-title"><?php the_field( 'solutions_why_section_title' ); ?></h2>

        <div class="row">

            <div class="col-left"> <?php

                while ( have_rows( 'solutions_why_reasons' ) ) : the_row(); ?>

                    <div class="why">
                        <p class="title"><?php the_sub_field( 'title' ); ?></p> <?php
                        the_sub_field( 'description' ); ?>
                    </div> <?php

                endwhile; ?>

            </div>

            <div class="col-right">
                <a href="<?php the_field( 'solutions_why_image_link' ); ?>"><?php echo wp_get_attachment_image( get_field( 'solutions_why_image' ), 'full' ); ?></a>
            </div>

        </div>

        <div class="testimonial">
            <p class="quote"><?php the_field( 'solutions_why_testimonial' ); ?></p>
            <p class="cite"><?php the_field( 'solutions_why_testimonial_cite' ); ?></p>
        </div>

    </div>
</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
