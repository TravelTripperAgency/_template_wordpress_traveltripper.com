<?php
/**
 * The template for displaying Resources Tags
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

get_header(); ?>

<div class="content-sidebar-wrap">

    <main class="content"> <?php

        the_archive_title( '<h1 class="page-title">', '</h1>' );
        
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
