<?php
/**
 * Template part for displaying internal ads on the posts page.
 *
 * @package Travel_Tripper
 */

if ( get_field( 'ad_title_page', get_option( 'page_for_posts' ) ) ) { ?>

    <section class="widget widget-cta"> <?php
        if ( get_field( 'ad_type_page', get_option( 'page_for_posts' ) ) ) { ?>
            <p class="widget-cta__type"><?php the_field( 'ad_type_page', get_option( 'page_for_posts' ) ) ?></p> <?php
        } ?>
        <h3 class="widget-title"><?php the_field( 'ad_title_page', get_option( 'page_for_posts' ) ) ?></h3> <?php
        if ( get_field( 'ad_time_page', get_option( 'page_for_posts' ) ) ) { ?>
            <div class="widget-cta__time"><p><?php the_field( 'ad_time_page', get_option( 'page_for_posts' ) ) ?></p></div> <?php
        }
        if ( get_field( 'ad_button_link_page', get_option( 'page_for_posts' ) ) && get_field( 'ad_button_text_page', get_option( 'page_for_posts' ) ) ) { ?>
            <a href="<?php the_field( 'ad_button_link_page', get_option( 'page_for_posts' ) ) ?>" class="btn btn-primary"><?php the_field( 'ad_button_text_page', get_option( 'page_for_posts' ) ) ?></a> <?php
        } ?>
    </section> <?php

} else { ?>

    <section class="widget widget-cta"> <?php
        if ( get_field( 'ad_type_global', 'options' ) ) { ?>
            <p class="widget-cta__type"><?php the_field( 'ad_type_global', 'options' ) ?></p> <?php
        } ?>
        <h3 class="widget-title"><?php the_field( 'ad_title_global', 'options' ) ?></h3> <?php
        if ( get_field( 'ad_time_global', 'options' ) ) { ?>
            <div class="widget-cta__time"><p><?php the_field( 'ad_time_global', 'options' ) ?></p></div> <?php
        }
        if ( get_field( 'ad_button_link_global', 'options' ) && get_field( 'ad_button_text_global', 'options' ) ) { ?>
            <a href="<?php the_field( 'ad_button_link_global', 'options' ) ?>" class="btn btn-primary"><?php the_field( 'ad_button_text_global', 'options' ) ?></a> <?php
        } ?>
    </section> <?php

}
