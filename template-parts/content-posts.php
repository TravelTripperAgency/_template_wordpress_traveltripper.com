<?php
/**
 * Template part for displaying results on list pages.
 * Pages like the blog, categories, and search pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

// Get the first category so long as it's not a Resource post
if ( get_post_type() !== 'resources' ) {
    $categories = get_the_category();
    $category_name = $categories[0]->cat_name;
    $category_link = get_category_link( $categories[0]->term_id );
} ?>

<article <?php post_class(); ?>>
    <div class="col-sm-6"> <?php
        if ( has_post_thumbnail() ) {
            if ( get_field( 'resource_link' ) ) { ?>
                <a href="<?php esc_url( the_field( 'resource_link' ) ); ?>"><?php the_post_thumbnail(); ?></a> <?php
            } else { ?>
                <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a> <?php
            }
        } else {
            if ( get_field( 'resource_link' ) ) { ?>
                <a href="<?php esc_url( the_field( 'resource_link' ) ); ?>"><?php traveltripper_default_thumbnail(); ?></a> <?php
            } else { ?>
                <a href="<?php esc_url( the_permalink() ); ?>"><?php traveltripper_default_thumbnail(); ?></a> <?php
            }
        } ?>
    </div>
    <div class="col-sm-6">
        <p class="entry-time"><time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time></p> <?php
        if ( get_post_type() !== 'resources' ) { ?>
            <p class="entry-category"><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $category_name; ?></a></p> <?php
        } ?>
        <p class="entry-title"><a href="<?php if ( get_field( 'resource_link' ) ) { esc_url( the_field( 'resource_link' ) ); } else { esc_url( the_permalink() ); } ?>"><?php the_title(); ?></a></p>
        <?php the_excerpt();
        if ( get_post_type() !== 'resources' ) { ?>
            <p class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array('size'=>30)); ?>" alt="<?php the_author(); ?>"></a>by&nbsp;<span class="entry-author-name"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p> <?php
        } ?>
    </div>
</article> <?php
