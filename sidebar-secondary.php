<?php
/**
 * The sidebar containing the blog author
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Tripper
 */

// if ( ! is_active_sidebar( 'sidebar-secondary' ) ) {
// 	return;
// }
?>

<?php // dynamic_sidebar( 'sidebar-secondary' ); ?>

<aside class="sidebar sidebar-secondary widget-area">
    <section class="widget widget-author">
        <a class="img-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><img src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), array('size'=>86)); ?>" alt="<?php the_author(); ?>"></a>
        <div class="author-bio-wrap">
            <p class="author-name"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></p>
            <p><?php the_author_meta('description') ?></p>
        </div>
    </section>
</aside>
