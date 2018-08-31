<?php
/**
 * Custom loop for featured resources in custom templates.
 *
 * @package Travel_Tripper
 */

$featured_category = get_field( 'featured_category' );

$query_resource_args = array(
    'cat' => $featured_category,
    'posts_per_page' => 4
);
$query_resource = new WP_Query( $query_resource_args );

if ( $query_resource->have_posts() ) { ?>

    <section class="featured-resources">
        <div class="wrap">

            <div class="featured-resources__title"><h3><?php echo get_cat_name( $featured_category );?> Resources</h3></div>

            <div class="featured-resources__wrap"> <?php

            	// Start the Loop
            	while ( $query_resource->have_posts() ) :
            		$query_resource->the_post(); ?>

                    <div class="resource">
                      <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
                      <p><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
                    </div> <?php

            	endwhile; ?>

            </div>

            <div class="btn-wrap">
              <a class="btn btn-primary-white" href="<?php echo get_term_link( $featured_category ); ?>">view all</a>
            </div>

        </div>

    </section> <?php

	// Restore original Post Data
	wp_reset_postdata();
    // rewind_posts();
}
