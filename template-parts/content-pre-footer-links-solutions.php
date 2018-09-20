<?php
/**
 * Template part for displaying the pre-footer-links area on solutions pages
 *
 * @package Travel_Tripper
 */

?>

<section class="pre-footer-links"> <?php

    if ( !is_page( 'booking-engine' ) ) { ?>
        <a class="pre-footer-link" href="<?php echo get_site_url(); ?>/solutions/booking-engine/">
            <div class="pre-footer-link__wrapper">
                <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-reztrip.svg" alt="Booking Engine icon">
                <p class="pre-footer-link__headline">RezTrip</p>
                <p class="pre-footer-link__description">Shift bookings from high-commission channels to direct bookings with the industry's most innovative website platform and booking engine.</p>
                <p class="pre-footer-link__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
            </div>
        </a> <?php
    }

    if ( !is_page( 'hotel-websites' ) ) { ?>
        <a class="pre-footer-link" href="<?php echo get_site_url(); ?>/solutions/hotel-website-design/">
            <div class="pre-footer-link__wrapper">
                <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ttweb.svg" alt="Hotel Websites icon">
                <p class="pre-footer-link__headline">Travel Tripper Web</p>
                <p class="pre-footer-link__description">Boost direct bookings with beautiful hotel websites driving higher guest engagement and increased conversions across all devices.</p>
                <p class="pre-footer-link__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
            </div>
        </a> <?php
    }

    if ( !is_page( 'digital-marketing' ) ) { ?>
        <a class="pre-footer-link" href="<?php echo get_site_url(); ?>/solutions/hotel-digital-marketing/">
            <div class="pre-footer-link__wrapper">
                <img class="pre-footer-link__image" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-digital-marketing.svg" alt="Digital Marketing icon">
                <p class="pre-footer-link__headline">Digital Marketing</p>
                <p class="pre-footer-link__description">Drive qualified traffic to your hotel website and maximize direct bookings with smart campaigns managed by an expert team.</p>
                <p class="pre-footer-link__arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.svg"></p>
            </div>
        </a> <?php
    } ?>

</section>
