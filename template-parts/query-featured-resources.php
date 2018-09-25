<?php
/**
 * Loop for featured resources in custom templates.
 *
 * @package Travel_Tripper
 */

if ( is_front_page() || is_page_template( array( 'page-templates/digital-marketing.php', 'page-templates/reztrip.php', 'page-templates/ttweb.php' ) ) ) {

    $featured_taxonomy = get_field( 'featured_category' );
    $query_resource_args = array(
        'cat' => $featured_taxonomy,
        'posts_per_page' => 4
    );

} else {

    $featured_taxonomy = get_field( 'featured_tag' );
    $query_resource_args = array(
        'tag_id' => $featured_taxonomy,
        'posts_per_page' => 4
    );

}

$query_resource = new WP_Query( $query_resource_args );

if ( isset( $featured_taxonomy ) && $query_resource->have_posts() ) { ?>

    <section class="featured-resources">
        <div class="wrap">

            <div class="featured-resources__title"><h3><?php echo get_term( $featured_taxonomy )->name; ?> Resources</h3></div>

            <div class="featured-resources__wrap"> <?php

            	// Start the Loop
            	while ( $query_resource->have_posts() ) : $query_resource->the_post(); ?>

                    <div class="resource">
                      <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
                      <p><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
                    </div> <?php

            	endwhile; ?>

            </div>

            <div class="btn-wrap">
                <a class="btn btn-primary-white" href="<?php echo get_term_link( $featured_taxonomy ); ?>">view all</a>
            </div>

        </div>

    </section> <?php

	// Restore original Post Data
	wp_reset_postdata();
    // rewind_posts();
}
