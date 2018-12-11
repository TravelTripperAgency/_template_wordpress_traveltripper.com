<?php
/**
 * The template for displaying the ADA page.
 *
 * Template Name: ADA
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<script>
function scrollToForm() {
    document.querySelector('.form').scrollIntoView({
        behavior: 'smooth'
    });
}
</script>

<section id="skip-link-content" class="page-header">
    <div class="wrap row">
        <div class="page-header__title-area<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInLeft'; } ?>">
            <h1 class="page-header__title"><?php the_title(); ?></h1> <?php
            if ( get_field( 'header_subtitle' ) ) { ?>
                <p class="page-header__subtitle"><?php the_field( 'header_subtitle' ); ?></p> <?php
            }
            if ( get_field( 'header_description' ) ) { ?>
                <p class="page-header__description"><?php the_field( 'header_description' ); ?></p> <?php
            } ?>
            <div class="btn-holder">
                <a class="btn btn-primary" href="javascript:scrollToForm();">Request a consultation</a>
            </div>
        </div>
        <div class="page-header__feature<?php if ( !wp_is_mobile() ) { echo ' animated wow slideInRight'; } ?>"> <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/solutions-dgs-header.png"> <?php
            } ?>
        </div>
    </div>
</section>

<section class="intro row">

    <div class="col-right">
        <div class="col-right__wrap">

            <h2 class="section-title"><?php the_field( 'ada_intro_section_title' ); ?></h2> <?php

            the_field( 'ada_intro_section_description' ); ?>

        </div>
    </div>

    <div class="col-left">
        <figure> <?php
            echo wp_get_attachment_image( get_field( 'ada_intro_section_image' ), 'full' ); ?>
        </figure>
    </div>

</section>

<section class="why background-image">
  <div class="wrap">

    <h2 class="section-title"><?php the_field( 'ada_why_section_title' ); ?></h2>

    <div class="reasons"> <?php
        while ( have_rows( 'ada_why_reasons' ) ) : the_row(); ?>
            <div class="col"> <?php
                echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); ?>
                <p class="title"><?php the_sub_field( 'title' ); ?></p>
                <p class="description"><?php the_sub_field( 'description' ); ?></p>
            </div> <?php
        endwhile; ?>
    </div>

  </div>
</section>

<section class="services wrap">

    <div class="services__intro">

        <div class="col-left">
            <h2 class="section-title"><?php the_field( 'ada_services_section_title' ); ?></h2>
        </div>

        <div class="col-right"> <?php
            the_field( 'ada_services_section_description' ); ?>
        </div>

    </div>

    <div class="services__image">
        <figure> <?php
            echo wp_get_attachment_image( get_field( 'ada_services_image' ), 'full' ); ?>
        </figure>
    </div>

    <div class="services__list">

        <div class="column">

            <p><?php the_field( 'ada_services_list_title_1' ); ?></p>

            <ul> <?php
                while ( have_rows( 'ada_services_list_1' ) ) : the_row(); ?>
                    <li><?php the_sub_field( 'item' ); ?></li> <?php
                endwhile; ?>
            </ul>

        </div>

        <div class="column">

            <p><?php the_field( 'ada_services_list_title_2' ); ?></p>

            <ul> <?php
                while ( have_rows( 'ada_services_list_2' ) ) : the_row(); ?>
                    <li><?php the_sub_field( 'item' ); ?></li> <?php
                endwhile; ?>
            </ul>

        </div>

    </div>

</section>

<section class="spacer background-image"></section>

<section class="form" id="form">
    <div class="wrap row">

        <div class="form__title">

            <h2 class="section-title"><?php the_field( 'ada_form_section_title' ); ?></h2> <?php

            the_field( 'ada_form_section_description' ); ?>

        </div> <?php

        if ( is_plugin_active( 'gravityforms/gravityforms.php' ) ) {
            gravity_form( 2, false, false, false, '', false );
        } ?>

    </div>
</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links-solutions' );

get_template_part( 'template-parts/query', 'events' );

get_template_part( 'template-parts/content', 'internal-ad' );

get_template_part( 'template-parts/query', 'featured-resources' );

get_footer();
