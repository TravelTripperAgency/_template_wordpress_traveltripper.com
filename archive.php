<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Tripper
 */

get_header(); ?>

<div class="content-sidebar-wrap">

    <main class="content"> <?php

        the_archive_title( '<h1 class="page-title">', '</h1>' );

		if ( have_posts() ) :

            // Start the Loop
            while ( have_posts() ) : the_post();

                // Get the first category
                $categories = get_the_category();
                $category = $categories[0]->cat_name; ?>

                <article class="latest-articles__item post entry">
                    <div class="col-sm-6">
                        <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="col-sm-6">
                        <p class="entry-time"><time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time></p>
                        <p class="entry-category"><?php echo $category; ?></p>
                        <p class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
                        <?php the_excerpt(); ?>
                        <p class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array('size'=>30)); ?>" alt="<?php the_author(); ?>"></a>by&nbsp;<span class="entry-author-name"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p>
                    </div>
                </article><?php

            endwhile;

            // Call Pagination
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    </main> <?php

    get_sidebar( 'primary' ); ?>

</div> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
