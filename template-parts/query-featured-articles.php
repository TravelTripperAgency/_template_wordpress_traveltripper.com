<?php
/**
 * Custom loop for the featured articles at the top of the blog page.
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

                <article class="featured-articles__item">
                    <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
                    <p class="entry-meta"><span class="entry-category"><?php echo $category; ?></span></p>
                    <p class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
                </article> <?php

        	endwhile;

        get_template_part( 'template-parts/content', 'internal-ad-blog' ); ?>

    </section> <?php

	// Restore original Post Data
	wp_reset_postdata();
    // rewind_posts();
}
