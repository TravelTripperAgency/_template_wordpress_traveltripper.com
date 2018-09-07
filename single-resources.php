<?php
/**
 * The template for displaying Resources posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package Travel_Tripper
 */

get_header(); ?>

<div class="content-sidebar-wrap">

    <main class="content"> <?php

        while ( have_posts() ) : the_post(); ?>

            <article class="post">

                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <time class="entry-time" datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
                </header> <?php

                if ( has_post_thumbnail() ) { ?>
                    <figure> <?php
                        the_post_thumbnail(); ?>
                    </figure> <?php
                }

                the_content(); ?>

                <footer class="entry-footer"> <?php
                    traveltripper_entry_footer(); ?>
            	</footer>

            </article> <?php

        endwhile; ?>

    </main> <?php

    get_sidebar( 'primary' ); ?>

</div> <?php

get_template_part( 'template-parts/content', 'pre-footer-links' );

get_footer();
