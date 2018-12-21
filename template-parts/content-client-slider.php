<?php
/**
 * Template part for displaying internal ads
 *
 * @package Travel_Tripper
 */

if ( is_front_page() ) {
    $rows = 'frontpage_client_slider_images';
} elseif ( is_page_template( 'page-templates/ttweb.php' ) ) {
    $rows = 'ttweb_client_slider_images';
} elseif ( is_page_template( 'page-templates/management-companies.php' ) ) {
    $rows = 'management_companies_client_slider';
} elseif ( is_page_template( 'page-templates/casinos.php' ) ) {
    $rows = 'casinos_client_slider';
} elseif ( is_page_template( 'page-templates/independents.php' ) ) {
    $rows = 'independents_client_slider';
} else {
    $rows = 'slider_images';
}

if ( have_rows( $rows ) ) { ?>

    <div class="owl-carousel client-slider"> <?php

        while ( have_rows( $rows ) ) : the_row();

            if ( get_sub_field( 'slider_href' ) ) { ?>
                <a href="<?php the_sub_field( 'slider_href' ); ?>"> <?php
            } ?>

            <div class="item background-image" style="background-image: url('<?php the_sub_field( 'slider_image' ); ?>');"></div> <?php

            if ( get_sub_field( 'slider_href' ) ) { ?>
                </a> <?php
            }

        endwhile; ?>

    </div> <?php

} ?>
