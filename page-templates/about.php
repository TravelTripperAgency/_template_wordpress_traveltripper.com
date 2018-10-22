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
        </div> <?php
        if ( have_rows( 'header_features' ) ) { ?>
            <div class="page-header__feature">
                <ul class="page-header__features"> <?php
                    while ( have_rows( 'header_features' ) ) : the_row(); ?>
                        <li><?php the_sub_field( 'header_feature' ); ?></li> <?php
                    endwhile; ?>
                </ul>
            </div> <?php
        } ?>
    </div>
</section>

<section class="hoteliers">

    <div class="col-left">
      <h2 class="section-title"><?php the_field( 'about_page_intro_section_title' ); ?></h2> <?php
      the_field( 'about_page_intro_text' ); ?>
    </div>

    <div class="col-right background-image" style="background-image: url('<?php the_field( 'about_page_intro_image' ); ?>');"> <?php
        if ( get_field( 'about_page_intro_image_caption' ) ) { ?>
            <p class="caption"><?php the_field( 'about_page_intro_image_caption' ); ?></p> <?php
        } ?>
    </div>

</section>

<section class="success">

    <div class="col-right">
        <h2 class="section-title"><?php the_field( 'about_page_section_two_section_title' ); ?></h2> <?php
        the_field( 'about_page_section_two_text' );
        if ( get_field( 'blue_text' ) ) { ?>
            <p class="blue-bold"><?php the_field( 'about_page_section_two_blue_text' ) ?></p> <?php
        } ?>
    </div>

    <div class="col-left">
        <figure<?php if ( get_field( 'about_page_section_two_image_caption' ) ) { echo ' class="wp-caption"'; } ?>> <?php
            $about_page_section_two = get_field( 'about_page_section_two' );
            echo wp_get_attachment_image( $about_page_section_two['image'], 'full' );
            if ( get_field( 'about_page_section_two_image_caption' ) ) { ?>
                <figcaption class="wp-caption-text"><?php the_field( 'about_page_section_two_image_caption' ); ?></figcaption> <?php
            } ?>
        </figure>
    </div>

</section>

<section class="headlines">

    <div class="col-left">
        <div class="wrap">
            <h2 class="section-title"><?php the_field( 'about_page_press_section_title' ); ?></h2> <?php
            the_field( 'about_page_press_text' ); ?>
        </div>
    </div>

    <div class="col-right">

        <div class="media">
            <div class="d-flex"><p class="title"><?php the_field( 'about_page_press_featured_title' ); ?></p></div>
            <div class="row"> <?php
	            while( have_rows( 'about_page_press_featured_logos' ) ) : the_row();

                    $image = get_sub_field( 'logo' );
                    $size = 'full'; // (thumbnail, medium, large, full or custom size) ?>
                    <div class="media__logo"> <?php
                        echo wp_get_attachment_image( $image, $size ); ?>
                    </div> <?php

                endwhile; ?>
            </div>
        </div>

        <div class="award">
            <div class="d-flex"><p class="title"><?php the_field( 'about_page_press_awards_title' ); ?></p></div>
            <div class="row"> <?php
                while( have_rows( 'about_page_press_awards_logos' ) ) : the_row();

                    $image = get_sub_field( 'logo' );
                    $size = 'full'; // (thumbnail, medium, large, full or custom size) ?>
                    <div class="award__logo"> <?php
                        echo wp_get_attachment_image( $image, $size ); ?>
                    </div> <?php

                endwhile; ?>
            </div>
        </div>

    </div>

</section>

<section class="join-us">

    <div class="col-left">
      <div class="wrap">

        <h2 class="section-title"> <?php
            if ( get_field( 'about_page_team_section_title_link' ) ) { ?>
                <a href="<?php the_field( 'about_page_team_section_title_link' ) ?>" rel="nofollow" target="_blank"> <?php
            }
            the_field( 'about_page_team_section_title' );
            if ( get_field( 'about_page_team_section_title_link' ) ) { ?>
                </a> <?php
            } ?>
        </h2> <?php

        the_field( 'about_page_team_text' );

        $image = get_field( 'about_page_team_center_image' );
        echo wp_get_attachment_image( $image, 'full' ); ?>

      </div>
    </div>

    <div class="col-right background-image" style="background-image: url('<?php the_field( 'about_page_team_image' ); ?>');"> <?php
        if ( get_field( 'about_page_team_image_caption' ) ) { ?>
            <p class="caption"><?php the_field( 'about_page_team_image_caption' ); ?></p> <?php
        } ?>
    </div>

</section> <?php

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
