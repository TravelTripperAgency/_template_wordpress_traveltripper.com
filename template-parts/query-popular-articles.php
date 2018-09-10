<?php
/**
 * Custom loop for the popular articles in the blog sidebar.
 *
 * @package Travel_Tripper
 */

$query_popular_args = array(
    'posts_per_page' => 4,
    'meta_query' => array(
        array(
            'key' => 'popular-checkbox',
            'value' => 'yes'
        )
    )
);
$query_popular = new WP_Query( $query_popular_args );

if ( $query_popular->have_posts() ) { ?>

    <section class="widget popular-content">

        <h3 class="widget-title">Popular Articles</h3>

        <div class="row"> <?php

            // Start the Loop
            while ( $query_popular->have_posts() ) :
                $query_popular->the_post(); ?>

                <div class="popular-content__item">
                    <p><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
                </div> <?php

            endwhile; ?>

        </div>

    </section> <?php

	// Restore original Post Data
	wp_reset_postdata();
    // rewind_posts();
}
