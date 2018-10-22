<?php
/**
 * The template for displaying the contact page
 *
 * Template Name: Contact
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

<section class="wrap contact-details"> <?php

    if ( have_rows( 'contact_department' ) ) :
        while ( have_rows( 'contact_department' ) ) : the_row(); ?>

            <div class="email"> <?php

                if ( have_rows( 'contact_departments' ) ) :
                    while ( have_rows( 'contact_departments' ) ) : the_row(); ?>

                        <div class="email__department">
                            <p class="title"><?php the_sub_field( 'department_title' ); ?></p> <?php
                            the_sub_field( 'department_details' ); ?>
                        </div> <?php

                    endwhile;
                endif; ?>

            </div> <?php

        endwhile;
    endif; ?>

    <div class="form"> <?php

        if ( is_plugin_active( 'gravityforms/gravityforms.php' ) ) { ?>
            <p>For all other inquiries, please use the following form:</p> <?php
            gravity_form( 1, false, false, false, '', false );
        } ?>

    </div>

</section>

<section class="locations">

    <div class="wrap">
        <p class="section-title">Office Locations</p>
    </div>

    <div class="row"> <?php

        if ( have_rows( 'office_locations' ) ) :
            while ( have_rows( 'office_locations' ) ) : the_row(); ?>

                <div class="location" style="background-image: url('<?php the_sub_field( 'location_image' ) ?>');">
                    <div class="location__wrap">
                        <p class="title"><?php the_sub_field( 'location_name' ) ?></p> <?php
                        the_sub_field( 'location_contact' ) ?>
                    </div>
                </div> <?php

            endwhile;
        endif; ?>

    </div>

</section> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
