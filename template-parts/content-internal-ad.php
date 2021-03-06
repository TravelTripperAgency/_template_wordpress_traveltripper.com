<?php
/**
 * Template part for displaying internal ads
 *
 * @package Travel_Tripper
 */

if ( is_page_template( 'front-page.php' ) ) {
    $id = 'id="internal-ad-click-0" ';
} elseif ( is_page_template( 'page-templates/reztrip.php' ) ) {
    $id = 'id="internal-ad-click-1" ';
} elseif ( is_page_template( 'page-templates/ttweb.php' ) ) {
    $id = 'id="internal-ad-click-2" ';
} elseif ( is_page_template( 'page-templates/digital-marketing.php' ) ) {
    $id = 'id="internal-ad-click-3" ';
} elseif ( is_page_template( 'page-templates/management-companies.php' ) ) {
    $id = 'id="internal-ad-click-4" ';
} elseif ( is_page_template( 'page-templates/casinos.php' ) ) {
    $id = 'id="internal-ad-click-5" ';
} elseif ( is_page_template( 'page-templates/partners.php' ) ) {
    $id = 'id="internal-ad-click-6" ';
} else {
    $id = '';
}

if ( get_field( 'ad_title_page' ) ) { ?>

    <section class="featured-webinar">

        <div class="col-right background-image" style="background-image: url('<?php the_field( 'ad_image_page' ) ?>')"></div>

        <div class="col-left">
            <div class="col-left__inner"> <?php
                if ( get_field( 'ad_type_page' ) ) { ?>
                    <div><p class="type"><?php the_field( 'ad_type_page' ) ?></p></div> <?php
                } ?>
                <div><p class="title"><?php the_field( 'ad_title_page' ) ?></p></div> <?php
                if ( get_field( 'ad_time_page' ) ) { ?>
                    <div><p class="time"><?php the_field( 'ad_time_page' ) ?></p></div> <?php
                }
                if ( get_field( 'ad_description_page' ) ) { ?>
                    <div><p><?php the_field( 'ad_description_page' ) ?></p></div> <?php
                }
                if ( get_field( 'ad_button_link_page' ) && get_field( 'ad_button_text_page' ) ) { ?>
                    <div><a <?php echo $id; ?>href="<?php the_field( 'ad_button_link_page' ) ?>" class="btn btn-primary"><?php the_field( 'ad_button_text_page' ) ?></a></div> <?php
                } ?>
            </div>
        </div>

    </section> <?php

} else { ?>

    <section class="featured-webinar">

        <div class="col-right background-image" style="background-image: url('<?php the_field( 'ad_image_global', 'options' ) ?>')"></div>

        <div class="col-left">
            <div class="col-left__inner"> <?php
                if ( get_field( 'ad_type_global', 'options' ) ) { ?>
                    <div><p class="type"><?php the_field( 'ad_type_global', 'options' ) ?></p></div> <?php
                } ?>
                <div><p class="title"><?php the_field( 'ad_title_global', 'options' ) ?></p></div> <?php
                if ( get_field( 'ad_time_global', 'options' ) ) { ?>
                    <div><p class="time"><?php the_field( 'ad_time_global', 'options' ) ?></p></div> <?php
                }
                if ( get_field( 'ad_description_global', 'options' ) ) { ?>
                    <div><p><?php the_field( 'ad_description_global', 'options' ) ?></p></div> <?php
                }
                if ( get_field( 'ad_button_link_global', 'options' ) && get_field( 'ad_button_text_global', 'options' ) ) { ?>
                    <div><a <?php echo $id; ?> href="<?php the_field( 'ad_button_link_global', 'options' ) ?>" class="btn btn-primary"><?php the_field( 'ad_button_text_global', 'options' ) ?></a></div> <?php
                } ?>
            </div>
        </div>

    </section> <?php

}
