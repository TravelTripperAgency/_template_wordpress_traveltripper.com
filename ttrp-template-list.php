<?php
/*
 * YARPP Template: List
 */

if ( have_posts() ) :
    $postsArray = array(); ?>

    <div class="related-articles">

        <p class="section-title">Related Articles</p>

        <div class="row"> <?php

            while (have_posts()) : the_post(); ?>
                <div class="col-sm-6 col-lg-4"> <?php
                    if ( has_post_thumbnail() ) { ?>
                        <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail( array( 395, 222 ) ); ?></a> <?php
                    } else { ?>
                        <a href="<?php esc_url( the_permalink() ); ?>"><?php traveltripper_default_thumbnail(); ?></a> <?php
                    } ?>
                    <p><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
                </div> <?php
            endwhile; ?>

        </div>
    </div> <?php

endif;
