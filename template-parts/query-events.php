<?php
/**
 * Custom loop for Events
 *
 * @package Travel_Tripper
 */

$today = date('Ymd');
$query_event_args = array(
    'post_type' => 'events',
    'posts_per_page' => 4,
    'meta_key' => 'event_start_date',
    'orderby' => 'meta_value',
    'order' => 'ASC',
    'meta_query' => array(
	     array(
	        'key'		=> 'event_end_date',
	        'compare'	=> '>=',
	        'value'		=> $today,
	    )
    )
);
$query_event = new WP_Query( $query_event_args );

if ( $query_event->have_posts() ) { ?>

    <section class="events">
        <div class="wrap">

            <div class="events__title"><h3>Upcoming Events</h3></div>

            <div class="row"> <?php

                while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <div class="event"> <?php
                        if ( get_field( 'event_dates' ) ) { ?>
                            <p class="event__date"><?php the_field( 'event_dates' ); ?></p> <?php
                        } ?>
                        <p class="event__title"><?php
                            if ( get_field( 'event_link' ) ) { ?>
                                <a href="<?php the_field( 'event_link' );  ?>" rel="nofollow" target="_blank"><?php the_title(); ?></a> <?php
                            } else {
                                the_title();
                            } ?>
                        </p> <?php
                        if ( get_field( 'event_location' ) ) { ?>
                            <p class="event__location"><?php the_field( 'event_location' ); ?></p> <?php
                        }
                        if ( get_field( 'event_time' ) ) { ?>
                            <p class="event__time"><?php the_field( 'event_time' ); ?></p> <?php
                        } ?>
                    </div> <?php
                endwhile; ?>

            </div>

        </div>
    </section> <?php

    // Restore original Post Data
	wp_reset_postdata();
    // rewind_posts();

}
