<?php
/**
 * Template part for displaying internal ads
 *
 * @package Travel_Tripper
 */

if ( is_front_page() ) {
    $rows = 'frontpage_client_slider_images';
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
