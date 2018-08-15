<?php
/**
 * Custom loop for Featured Blog Articles
 *
 * @package Travel_Tripper
 */

$query_featured_args = array(
    'posts_per_page' => 5,
    'meta_query' => array(
        array(
            'key' => 'featured-checkbox',
            'value' => 'yes'
        )
    )
);
$query_featured = new WP_Query( $query_featured_args );

if ( $query_featured->have_posts() ) { ?>

    <section class="featured-articles">

        <div class="featured-articles__title"><h2>Featured Articles</h2></div> <?php

        	// Start the Loop
        	while ( $query_featured->have_posts() ) :
        		$query_featured->the_post();

                // Get the first category
                $categories = get_the_category();
                $category = $categories[0]->cat_name; ?>

                <article class="featured-articles__item post entry">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <p class="entry-meta"><span class="entry-category"><?php echo $category; ?></span></p>
                    <p class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                </article> <?php

        	endwhile; ?>

        <section class="widget widget-cta">
          <p class="widget-cta__type">Webinar</p>
          <h3 class="widget-title">Optimizing Distribution Channels for Independent Hotels</h3>
          <div class="widget-cta__time"><p>Friday February 2, 2017 @ 10:30AM EST</p></div>
          <a href="#" class="btn btn-primary">reserve your spot</a>
        </section>

    </section> <?php

	// Restore original Post Data
	wp_reset_postdata();
    // rewind_posts();
}
