<?php
/**
 * Custom loop for Events
 *
 * @package Travel_Tripper
 */

$query_event_args = array(
    'post_type' => 'events',
    'posts_per_page' => 4,
    'meta_key' => 'event_start_date',
    'orderby' => 'meta_value',
    'order' => 'ASC'
);
$query_event = new WP_Query( $query_event_args );

if ( $query_event->have_posts() ) { ?>

    <section class="widget widget-events events">
        <div class="wrap">

            <div class="widget-title"><h3>Upcoming Events</h3></div>

            <div class="row"> <?php

                while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <div class="event"> <?php
                        if ( get_field( 'event_dates' ) ) { ?>
                            <p class="event__date"><?php the_field( 'event_dates' ); ?></p> <?php
                        } ?>
                        <p class="event__title"><?php the_title(); ?></p>
                    </div> <?php
                endwhile; ?>

            </div>

        </div>
    </section> <?php

    // Restore original Post Data
	wp_reset_postdata();
    // rewind_posts();

}
