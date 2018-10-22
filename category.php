<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Tripper
 */

get_header();

if ( function_exists( 'yoast_breadcrumb' ) ) {
   yoast_breadcrumb( '<div class="breadcrumbs wrap">','</div>' );
} ?>

<div class="content-sidebar-wrap">

    <main class="content"> <?php

        the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

        <p class="category-description"><?php echo category_description(); ?></p> <?php

		if ( have_posts() ) :

            // Start the Loop
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'posts' );

            endwhile; ?>

            <nav class="navigation pagination" role="navigation">
                <h2 class="screen-reader-text">Posts navigation</h2>
                <div class="nav-links"> <?php
                    echo paginate_links(); ?>
                </div>
            </nav> <?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    </main> <?php

    get_sidebar( 'primary' ); ?>

</div> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
