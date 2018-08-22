<?php
/**
 * Template part for displaying results on list pages.
 * Pages like the blog, categories, and search pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Travel_Tripper
 */

// Get the first category
$categories = get_the_category();
$category = $categories[0]->cat_name; ?>

<article <?php post_class(); ?>>
    <div class="col-sm-6"> <?php
        if ( has_post_thumbnail() ) { ?>
            <a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail(); ?></a> <?php
        } else { ?>
            <a href="<?php esc_url( the_permalink() ); ?>"><?php // TODO: Call default image. ?></a> <?php
        } ?>
    </div>
    <div class="col-sm-6">
        <p class="entry-time"><time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time></p>
        <p class="entry-category"><?php echo $category; ?></p>
        <p class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></p>
        <?php the_excerpt(); ?>
        <p class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array('size'=>30)); ?>" alt="<?php the_author(); ?>"></a>by&nbsp;<span class="entry-author-name"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p>
    </div>
</article> <?php
